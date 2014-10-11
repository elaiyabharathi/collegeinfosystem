
/** projectwaiting indexes **/
db.getCollection("projectwaiting").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** staff indexes **/
db.getCollection("staff").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** projectwaiting records **/
db.getCollection("projectwaiting").insert({
  "_id": ObjectId("52d2f06c6912ad080f000029"),
  "dept": "Department of Media Sciences",
  "pname": "  ksn",
  "status": "waiting",
  "sid": "123",
  "regno": "2012103058",
  "sname": "Sakthivel",
  "members": [
    ObjectId("52c9a6f06912ad8411000029"),
    null,
    null,
    null,
    null,
    null,
    null
  ],
  "description": "sasnj"
});
db.getCollection("projectwaiting").insert({
  "_id": ObjectId("52d2f0f06912adc406000029"),
  "dept": "Department of Media Sciences",
  "pname": "  ksn",
  "status": "waiting",
  "sid": "123",
  "regno": "2012103058",
  "sname": "Sakthivel",
  "members": [
    ObjectId("52c9a6f06912ad8411000029"),
    null,
    null,
    null,
    null,
    null,
    null
  ],
  "description": "sasnj"
});

/** staff records **/
db.getCollection("staff").insert({
  "_id": ObjectId("52c768716912ad8810000029"),
  "staffid": " CX H",
  "email": "sakthipvmj@gmail.com",
  "name": " CXHB",
  "dept": "Department of Electrical and Electronics Engineering",
  "password": "202cb962ac59075b964b07152d234b70"
});
db.getCollection("staff").insert({
  "_id": ObjectId("52c8bdaa6912ad4c0f000029"),
  "staffid": "123",
  "email": "sakthi274419@gmail.com",
  "name": "Sakthivel",
  "dept": "Department of Media Sciences",
  "password": "202cb962ac59075b964b07152d234b70"
});
