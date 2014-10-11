change directory to your apache root directory (usually www/) using cd . Do not create a folder names "igniter" (if u aready have delete or rename it)
git clone https://github.com/Mithul/igniter.git     - first time only
git remote add origin https://github.com/Mithul/igniter.git

make whatever changes you need

git add -if u have created new files
git status - to check what changes u will push
git commit -m "Some meaningful message"  !!!!!DO NOT Commit if u have a bug in your app!!!! (fix it then commit)
git push origin master
git status -check if any changes have not been pushed
