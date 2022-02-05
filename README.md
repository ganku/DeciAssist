# DeciAssist
DesciAssist is a static decision tree to guide user through steps in a flowchart
It can also be used for users to follow a process and document the steps for compliance.

#Deployment
Download all files.

Create a DB called tshoot with one table Questions.
CREATE TABLE IF NOT EXISTS "Questions"(
  "ID" INTEGER,
  "PID" INTEGER,
  "TXT" TEXT
);

The nodes of the tree are questions. If it is a child node, it containes parent id. Root node has parent id value of 0.
