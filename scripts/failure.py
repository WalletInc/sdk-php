import sys
import requests
import time

# First argument is the Slack URL
slack_url = sys.argv[1]

# Second argument is the actor
actor = sys.argv[2]

# Third argument is the repository
repo = sys.argv[3]

# Fourth argument is the git ref
ref = sys.argv[4]

# Fifth argument is the squadcast api endpoint
squadcast_url = sys.argv[5]

slack_data = {
    "blocks": [
        {"type": "section", "text":
            {
                "type": "mrkdwn", "text": "New push by: "+actor+" to `"+repo+"` on `"+ref+"` :confetti_ball:. Something went wrong, so this push was not deployed."
            }
         }
    ]
}

squadcast_data = {
    "message": "Push by: "+actor+" to "+repo+" on "+ref+" has failed",
    "description": "Push by: "+actor+" to "+repo+" on "+ref+" has failed",
    "status": "trigger",
    "severity": "high"
}

RETRIALS = 5


def notify(name, url, payload):
    """POST payload to url, retrying on failure. Returns True on success.

    Any 2xx is treated as success: Slack incoming webhooks return 200 while
    SquadCast returns 202 (Accepted), so keying only on 200 wrongly reported
    delivered alerts as failures.
    """
    for attempt in range(1, RETRIALS + 1):
        try:
            resp = requests.post(url, json=payload)
        except requests.RequestException as err:
            print("Error sending message to " + name + ": " + str(err))
        else:
            if 200 <= resp.status_code < 300:
                print("Message sent to " + name +
                      " (status " + str(resp.status_code) + ")")
                return True
            print("Received status code: " + str(resp.status_code) +
                  " from " + name + ". Expecting 2xx.")

        if attempt < RETRIALS:
            print("Retrying " + name + " after 5 seconds...")
            time.sleep(5)

    print("Couldn't send message to " + name + " after " +
          str(RETRIALS) + " retrials")
    return False


# Notify both channels independently: a SquadCast failure must not skip Slack.
squadcast_ok = notify("SquadCast", squadcast_url, squadcast_data)
slack_ok = notify("Slack", slack_url, slack_data)

# Non-zero exit if either channel ultimately failed, so alerting problems stay
# visible in the CI logs even though both channels were still attempted.
if not (squadcast_ok and slack_ok):
    sys.exit(1)

sys.exit(0)
