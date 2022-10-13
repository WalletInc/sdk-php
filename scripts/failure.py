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

retrials = 5
for i in range(retrials):
    if i == (retrials - 1):
        print("Couldn't send message to SquadCast after " +
              str(retrials) + " retrials")
        sys.exit(1)
    else:
        resp = requests.post(squadcast_url, json=squadcast_data)
        if resp.status_code == 200:
            sys.exit(0)
        else:
            print("Received status code: "+str(resp.status_code) +
                  " from slack. Expecting 200. Retrying after 5 seconds...")
            time.sleep(5)
            continue


for i in range(retrials):
    if i == (retrials - 1):
        print("Couldn't send message on Slack after " +
              str(retrials) + " retrials")
        sys.exit(1)
    else:
        resp = requests.post(slack_url, json=slack_data)
        if resp.status_code == 200:
            sys.exit(0)
        else:
            print("Received status code: "+str(resp.status_code) +
                  " from slack. Expecting 200. Retrying after 5 seconds...")
            time.sleep(5)
            continue
