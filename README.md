Author
--------------------
Md. Hasnain
Intern Engineer
W3 Engineers Ltd


Description
---------------
--> Php yii assginment
--> Project name 'ShareMe'
--> Share what you want to share.
--> Decide with whom you want to share.
--> Control your posts.
--> Only admin can create/modify/delete users.
--> Every one can create/update post. Only admin can delete them.
--> Agent can see own posts and others public posts.
--> Every one can see the posts which are shared with  them no matter it is public/private.
--> Clients can see their own posts, other clients public posts and the posts which are shared with them.
--> Admin can see all posts no matter it is public or private.


Privacy table
------------------------
Status owner 	Privacy 	Who can see
---------------------------------------------------------
Admin		Private		No one
Admin		Public	 	Agents
Admin		Custom		Selected person

Agent		Private		Admin
Agent		Public		Admin, Other Agents, Own Clients
Agent		Custom		Admin, Selected person

Client		Private		Admin
Client		Public		Admin, Agent of him, Other Clients
Client		Custom		Admin, Selected person



Setup
----------------
1. Create a database on mySql named: db_share_me
2. Import the database file from "Database file" folder
3. Copy the project file to 'htdocs' folder
4. Run the project on 'localhost/ShareMe'
5. Login with 'admin@gmail.com, admin' for admin options
6. Enjoy :)

