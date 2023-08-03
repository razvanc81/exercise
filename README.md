# exercise

First of all, I must point out that I did not fully understand this exercise, on what basis are these JSONs generated, how exactly should they be interpreted?
Below I answered the questions from the exercise, I don't know if it is enough.

-------------------------------------------

Which infrastructure resources you would need to run the utility daily in an automated fashion?
- a cron will be set to index.php that will be run once a day

How would you deploy your code to the infrastructure?
- a git commit -am "messages for commit" then git push 

How would you automate your deployments so that each push to your default branch will trigger a deployment to your production environment?
- it can be don creating a git hook after push sh

Is it possible to get the data about past crosswords? If yes, how would you build a solution to get all the historical crosswords data?
- yes for each call we can store into a history table e.g. enswers table with fields:
    id pk, answer varchar, clue varchar, length unsigned Int, date_generated Date, direction VARCHAR

-------------------------------------------
After git clone from repo please run in Postman run on GET method this link: 
- http://localhost/exercise/index.php?date=2023-03-14