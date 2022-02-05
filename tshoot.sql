CREATE TABLE IF NOT EXISTS "Questions"(
  "ID" INTEGER,
  "PID" INTEGER,
  "TXT" TEXT
);
insert into Questions values (1,0,"What is the issue with Website?");
insert into Questions values (2,1,"Website Slow?");
insert into Questions values (3,1,"Website Down?");
insert into Questions values (4,2,"Check Threads and Queue");
insert into Questions values (5,3,"Can you ping the server?");
insert into Questions values (6,5,"Yes");
insert into Questions values (7,5,"No");
insert into Questions values (8,6,"Can you Logon to server?");
insert into Questions values (9,8,"Yes");
insert into Questions values (10,8,"No");
insert into Questions values (11,9,"Logong and Troubleshoot");
insert into Questions values (11,10,"Restart Server");