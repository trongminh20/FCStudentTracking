# FCStudentTracking system

## clone repo
```
git clone https://github.com/trongminh20/FCStudentTracking.git
```

## After cloning

*create a branch for yourself, make a first commit on repo with message* <br>
```  
  git branch <Yourname>
  
  git checkout <Yourname>

  echo "this is file from <Yourname>" >> <Yourname>.txt

  git add <Yourname>.txt

  git commit -m "First commit from <Yourname>

  git push origin <your branch>
```
## Branches 
    * main: for ready-to-release version, always the stable version 
    * demo : for demo. it is a version for group test
    * <your name> : Storing version of your own code and this is the branch that you are working on
## Pull code from branch main
```
git checkout <yourname>
git pull origin main
```
or 
```
git pull origin <yourname>
```

_The branch main was protected, so you are only able to work on your own branch that you created -> push your code 
-> wait for merge code in the main branch_ 

## Working on this project:
 * server simulator:  Laragon
 * Language: PHP, HTML/CSS, JS, SQL

**I made a coding style guide for this project, make sure you agree and apply that standard in your code.** 

 **Make sure your code work properly before request to merge on main branch**
