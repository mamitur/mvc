
1. A fork is a copy of a repository. Forking a repository allows you to freely experiment with changes without affecting the original project.

2.Most commonly, forks are used to either propose changes to someone else's project or to use someone else's project as a starting point for your own idea.

Forks act as a sort of bridge between the original repository and your personal copy.

When you fork a repo, you make an exact copy of the repo in your own account. Once you create a copy in your account you own it! Thus, you you can freely modify it as you wish



Fork the repository.

Make the fix.

Submit a pull request to the project owner.

3.If the project owner likes your work, they might pull your fix into the original repository!

4.At the heart of open source is the idea that by sharing code, we can make better, more reliable software.

reliable:someone or something that is reliable can be trusted or depended on

You can change the name of a forked repo and it will still be connected to the central repo from which it was forked. For now, leave it the same.





Fork the repository

1. click the Fork button in the header of the repository.

2 clone your fork (  so far, it only exists on GitHub. To be able to work on the project, you will need to clone it to your computer.)

3.Making and Pushing changes

4.Making a pull request

5. If the owner of project find your adding is good he/she will accept your pull request. If not so your adding will be online maybe some one else like it.







Keep your fork synced



You might fork a project in order to propose changes to the upstream, or original, repository. In this case, it's good practice to regularly sync your fork with the upstream repository. To do this, you'll need to use Git on the command line. You can practice setting the upstream repository using the same octocat/Spoon-Knife repository you just forked!



How to Update a Fork in Github

Access your forked repository on Github.

Click “Pull Requests” on the right, then click the “New Pull Request” button.

Github first compares the base fork with yours, and will find nothing if you made no changes, so, click “switching the base”, which will change your fork to the base, and the original to the head fork. Now you should see changes where your fork needs to play “catch up”.

Click “Create Pull Request”, give it a name, click “Send Pull Request”.

Click “Merge Pull Request” and “Confirm Merge”

Update a Local Fork at the Terminal



Configuring a remote for a fork

https://help.github.com/en/github/collaborating-with-issues-and-pull-requests/configuring-a-remote-for-a-fork

https://rick.cogley.info/post/update-your-forked-repository-directly-on-github/

List the current configured remote repository for your fork.



git remote -v>

origin https://github.com/YOUR_USERNAME/YOUR_FORK.git (fetch)>

origin https://github.com/YOUR_USERNAME/YOUR_FORK.git (push)







Specify a new remote upstream repository that will be synced with the fork.



$ git remote add upstream https://github.com/ORIGINAL_OWNER/ORIGINAL_REPOSITORY.git







Verify the new upstream repository you've specified for your fork.



$ git remote -v>

origin https://github.com/YOUR_USERNAME/YOUR_FORK.git (fetch)>

origin https://github.com/YOUR_USERNAME/YOUR_FORK.git (push)> upstream https://github.com/ORIGINAL_OWNER/ORIGINAL_REPOSITORY.git (fetch)> upstream https://github.com/ORIGINAL_OWNER/ORIGINAL_REPOSITORY.git (push)





git branch -a

Check out your fork's local master branch.

git fetch upstream



$ git checkout master> Switched to branch 'master'



Merge the changes from upstream/master into your local master branch. This brings your fork's master branch into sync with the upstream repository, without losing your local changes.



$ git merge upstream/master> Updating a422352..5fdff0f> Fast-forward> README | 9 -------> README.md | 7 ++++++> 2 files changed, 7 insertions(+), 9 deletions(-)> delete mode 100644 README> create mode 100644 README.mdIf your local branch didn't have any unique commits, Git will instead perform a "fast-forward":$ git merge upstream/master> Updating 34e91da..16c56ad> Fast-forward> README.md | 5 +++--> 1 file changed, 3 insertions(+), 2 deletions(-)


hello world

update with me

update with me on github



