<?php
echo
"
#Tell me how to remove them locally and remotely.

 1- To remove a branch locally:

        git branch -d branch-name


2-To remove a branch remotely:

        git push origin --delete branch-name


#Tell me how to checkout another branch without commit changes

3- Stash your changes:

        git stash


4- Checkout the desired branch:

        git checkout branch-name


5-Apply the stashed changes:

        git stash apply



#Tell me how to list tags.

6-To list all the tags in your Git repository

        git tag


#Tell me how to delete tag locally and remotely.


7-To delete a tag locally
        git tag  


8-To delete a tag from the remote repository
            git push --delete origin v1.7


";?>
