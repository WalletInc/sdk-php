import sys
import requests
import time

# First argument is the file name that consists of all the files that have been changed
files_changed_f = sys.argv[1]

# Second argument is the file name that consists of all the commit messages
commit_messages_f = sys.argv[2]

# Third argument is the slack URL
slack_url = sys.argv[3]

# Fourth argument is the github actor
actor = sys.argv[4]

# Fifth argument is the repo name
repo = sys.argv[5]

# Sixth argument is the run_id
run_id = sys.argv[6]

# Seventh argument is the github_ref -> could either be the name of the branch or the name of the pull request, depending on the event
ref = sys.argv[7]

files_changed = []
commit_messages = []

for f in open(files_changed_f, "r").read().split("\n"):
    if len(f) > 0:
        files_changed.append(f)

for f in open(commit_messages_f, "r").read().split("\n"):
    if len(f) > 0:
        commit_messages.append(f)

# Trim the number of commit messages to 10, since Slack does not support large payload size
commit_messages = commit_messages[:10]

slack_message = {}

blocks = []
blocks.append({
    "type": "section",
    "text": {
        "type": "mrkdwn",
        "text": "New Push by *"+actor+"* to `"+repo+"` on `"+ref+"`:confetti_ball:\nYou can look at the logs here: https://github.com/"+repo+"/actions/runs/"+run_id
    }
})
blocks.append({
    "type": "divider"
})
# Files changed
blocks.append({
    "type": "section",
    "text": {
        "type": "mrkdwn",
        "text": "*Files changed*\n"+"\n".join(files_changed)
    }
})
# Commit messages
blocks.append({
    "type": "section",
    "text": {
        "type": "mrkdwn",
        "text": "*Commit messages*\n"+"\n".join(commit_messages)
    }
})

slack_message["blocks"] = blocks

retrials = 5
for i in range(retrials):
    if i == (retrials - 1):
        print("Couldn't send message on Slack after " +
              str(retrials) + " retrials. Seems like Slack API may be down, so clean exiting since deployment has succeeded.")
        sys.exit(0)
    else:
        resp = requests.post(slack_url, json=slack_message)
        if resp.status_code == 200:
            sys.exit(0)
        else:
            print("Received status code: "+str(resp.status_code) +
                  " from slack. Expecting 200. Retrying after 5 seconds...")
            time.sleep(5)
            continue
