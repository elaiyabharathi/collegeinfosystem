
/** staff indexes **/
db.getCollection("staff").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** staff records **/
db.getCollection("staff").insert({
  "_id": ObjectId("52c6b028643b1fa00f000029"),
  "bday": "10",
  "bmonth": "February",
  "byear": "1985",
  "dept": "Department of Computer Science Engineering",
  "email": "gowtham@gmail.com",
  "name": "gowtham",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "staffid": "2012100023"
});
db.getCollection("staff").insert({
  "_id": ObjectId("52e0cea9643b1ff80d000029"),
  "bday": "10",
  "bmonth": "February",
  "byear": "1985",
  "dept": "Department of Computer Science Engineering",
  "email": "gowtham@gmail.com",
  "name": "dinesh",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "staffid": "2012100022"
});
