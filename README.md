# branded

A website for a fictional web / design firm.

Lets work on this site when we have free time. 

Add Design Comps to WIKI if needed.




GIT HELP !!!!


Checking out this Project for the first time:

Open up terminal
CD to your websites folder
$ git clone https://github.com/maxwellcarl/test.git <- ( location of git hub project you want to work on clones everything in repo)
$ git remote set-url origin https://github.com/maxwellcarl/test.git <- ( changes remote origin from SSH to HTTPS .... location of git hub project you want to work on )
$ git remote -v ( check that your remote is set to the right git repository. )
Start Editing the files ( update index.html with current time or whatever you want )
Before Editing Existing Repo:

cd to project root folder in terminal ( or that contains .git folder )
git pull origin master ( !!! important !!! pull latest changes to the master branch that may have been added by someone else... or git pull branch of your choice )
Begin Editing
View Changes and Push Changes to Repo:

cd to project root folder in terminal
$ git status ( this shows which files you've edited )
$ git add . ( this stages all edited files for commit )
$ git commit -m "edited time" ( this commits changes in qoutes add a message for the commit i.e. updated index.html or changed time )
$ git push origin master ( pushes the repo with your latest commits to the repository. they will now show up on the repo and on the live server. )
Creating a new branch to work on:

$ git branch ( returns current working branch )( most likely master branch if none have been made )
$ git checkout -b new branch name
$ git push origin [new branch name]
Mergin branch to master:

$ git checkout master ( checkout master branch )
$ git merge new branch name
$ git push orgin master ( resolve any conflicts then push master branch with merged branch changes )
Google more on merging / branching etc if you'd like or just work on master.

https://help.github.com/