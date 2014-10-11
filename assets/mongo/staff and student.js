
/** staff indexes **/
db.getCollection("staff").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** student indexes **/
db.getCollection("student").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** staff records **/
db.getCollection("staff").insert({
  "_id": "",
  "dept": "Department of Computer Science Engineering"
});
db.getCollection("staff").insert({
  "_id": ObjectId("52e0e169bdb809fd268b4569"),
  "day": "24",
  "dept": "Department of Computer Science Engineering",
  "email": "svalli@cs.annauniv.edu",
  "month": "january",
  "name": " Dr. S. Valli",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "phone": "9878967541",
  "rank": "Assistant Professor",
  "sex": "male",
  "specialization": "Operating System",
  "staffid": "10006",
  "year": "1963"
});
db.getCollection("staff").insert({
  "_id": ObjectId("52e0d402bdb809fd268b4568"),
  "day": "12",
  "dept": "Department of Computer Science Engineering",
  "email": "easwar!@cs.annauniv.edu  ",
  "id": "",
  "month": "january",
  "name": "Dr. K.S. Easwarakumar",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "phone": "9878967541",
  "rank": "Professor",
  "sex": "male",
  "specialization": "Network Security",
  "staffid": "10008",
  "year": "1954"
});
db.getCollection("staff").insert({
  "_id": ObjectId("52e0e367bdb809442f8b4567"),
  "bday": "2",
  "bmonth": "may",
  "byear": "1963",
  "dept": "Department of Computer Science Engineering",
  "email": "angel@cs.annauniv.edu ",
  "name": "Angelin Gladston",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "phone": "9878967541",
  "rank": "Assistant Professor",
  "sex": "male",
  "specialization": "Software Engineering",
  "staffid": "2"
});
db.getCollection("staff").insert({
  "_id": ObjectId("52e0e2f8bdb8090f278b4569"),
  "bday": "16",
  "bmonth": "April",
  "byear": "1963",
  "dept": "Department of Computer Science Engineering",
  "email": "rajeswari@cs.annauniv.edu",
  "name": " Dr. Rajeswari Sridhar",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "phone": "9878967541",
  "rank": "Assistant Professor",
  "sex": "male",
  "specialization": "Compliers",
  "staffid": "3"
});
db.getCollection("staff").insert({
  "_id": ObjectId("52e0e27bbdb809412e8b4567"),
  "bday": "2",
  "bmonth": "january",
  "byear": "1963",
  "dept": "Department of Computer Science Engineering",
  "email": "traghuveera@cs.annauniv.edu ",
  "name": "Dr. T. Raghuveera",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "phone": "9878967541",
  "rank": "Assistant Professor",
  "sex": "male",
  "specialization": "Web Technologies",
  "staffid": "4"
});
db.getCollection("staff").insert({
  "_id": ObjectId("52e0e0eabdb8098e378b4569"),
  "bday": "14",
  "bmonth": "january",
  "byear": "1963",
  "dept": "Department of Computer Science Engineering",
  "email": "tvgeedir [at] cs.annauniv [dot] edu  ",
  "name": " Dr. T.V. Geetha",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "phone": "9878967541",
  "rank": "Professor",
  "sex": "male",
  "specialization": "Artificial Intelligence",
  "staffid": "10007"
});
db.getCollection("staff").insert({
  "_id": ObjectId("52e0e1f4bdb809532e8b4569"),
  "day": "24",
  "dept": "Department of Computer Science Engineering",
  "email": "baaski@cs.annauniv.edu  ",
  "month": "january",
  "name": "  Dr. R. Bhaskaran",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "phone": "9878967541",
  "rank": "Assistant Professor",
  "sex": "male",
  "specialization": "Multimedia",
  "staffid": "5",
  "year": "1963"
});

/** student records **/
db.getCollection("student").insert({
  "_id": ObjectId("52e0e99e35d91f9c1200002a"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "interest": "MySQL"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0e495bdb809532e8b456a"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "9",
  "bmonth": "1",
  "byear": "1994",
  "dept": "Department of Computer Science Engineering",
  "email": "ajay@gmail.com",
  "interest": "MongoDB",
  "name": "Ajay",
  "password": "ec248fea4c16b969106aa15469a30cbc",
  "regno": "2012103023",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52c69719bdb809dc128b4567"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "21",
  "bmonth": "12",
  "byear": "1994",
  "dept": "Department of Computer Science Engineering",
  "email": "mithulmathi@gmail.com",
  "interest": "MongoDB",
  "name": "Mithul",
  "password": "ec248fea4c16b969106aa15469a30cbc",
  "regno": "2012103037",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0e63335d91f740100002a"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "2",
  "bmonth": "5",
  "byear": "1994",
  "dept": "Department of Computer Science Engineering",
  "email": "raj@gmail.com",
  "interest": "MongoDB",
  "name": "Raj.G",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2012103076",
  "sex": "female"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0e69b35d91f740100002b"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "20",
  "bmonth": "1",
  "byear": "1994",
  "dept": "Department of Computer Science Engineering",
  "email": "vinay@gmail.com",
  "interest": "MongoDB",
  "name": "Vinay.G",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2012103096",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0e6fe35d91f740100002c"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "13",
  "bmonth": "5",
  "byear": "1994",
  "dept": "Department of Computer Science Engineering",
  "email": "vijay@gmail.com",
  "interest": "MongoDB",
  "name": "R.Vijay",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2012103020",
  "sex": "Male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0e76c35d91f740100002d"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "20",
  "bmonth": "8",
  "byear": "1994",
  "dept": "Department of Computer Science Engineering",
  "email": "vidya@gmail.com",
  "interest": "MySQL",
  "name": "S.Vidya",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2012103090",
  "sex": "Female"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0e79f35d91f740100002e"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "5",
  "bmonth": "8",
  "byear": "1994",
  "dept": "Department of Computer Science Engineering",
  "email": "shahana@gmail.com",
  "interest": "MySQL",
  "name": "Shahana",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2012103004",
  "sex": "Female"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0e3c6bdb809542e8b4569"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "21",
  "bmonth": "12",
  "byear": "1994",
  "dept": "Department of Computer Science Engineering",
  "email": "sangee29495@gmail.com",
  "interest": "MySQL",
  "name": "Sangeetha.K.P.",
  "password": "ec248fea4c16b969106aa15469a30cbc",
  "regno": "2012103059",
  "sex": "female"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0e3f1bdb809fc268b456a"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "12",
  "bmonth": "12",
  "byear": "1991",
  "dept": "Department of Computer Science Engineering",
  "email": "sakthi@gmail.com",
  "interest": "MySQL",
  "name": "Sakthivel.",
  "password": "ec248fea4c16b969106aa15469a30cbc",
  "regno": "2012103058",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0e42dbdb809fd268b456a"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "15",
  "bmonth": "9",
  "byear": "1995",
  "dept": "Department of Computer Science Engineering",
  "email": "elaiyabarathi@gmail.com",
  "interest": "MongoDB",
  "name": "Elaiyabarathi",
  "password": "ec248fea4c16b969106aa15469a30cbc",
  "regno": "2012103021",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0e456bdb8090f278b456a"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "5",
  "bmonth": "6",
  "byear": "1994",
  "dept": "Department of Computer Science Engineering",
  "email": "gowtham@gmail.com",
  "interest": "MongoDB",
  "name": "Gowtham.V.N.",
  "password": "ec248fea4c16b969106aa15469a30cbc",
  "regno": "2012103016",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0e7ca35d91f740100002f"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "2",
  "bmonth": "9",
  "byear": "1994",
  "dept": "Department of Computer Science Engineering",
  "email": "ajith@gmail.com",
  "interest": "MongoDB",
  "name": "Ajith",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2012103078",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0ea2435d91f9c1200002b"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "19",
  "bmonth": "7",
  "byear": "1995",
  "dept": "Department of Computer Science Engineering",
  "email": "barath@gmail.com",
  "interest": "MongoDB",
  "name": "Barath.G",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2012103019",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0ea7835d91f9c1200002c"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "20",
  "bmonth": "8",
  "byear": "1995",
  "dept": "Department of Computer Science Engineering",
  "email": "ramya@gmail.com",
  "interest": "MongoDB",
  "name": "Ramya.G",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2012103040",
  "sex": "female"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0ead935d91f7401000030"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "10",
  "bmonth": "5",
  "byear": "1995",
  "dept": "Department of Computer Science Engineering",
  "email": "arun@gmail.com",
  "interest": "MongoDB",
  "name": "Arun.G",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2012103041",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0eafb35d91f7401000031"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "11",
  "bmonth": "6",
  "byear": "1995",
  "dept": "Department of Computer Science Engineering",
  "email": "baskar@gmail.com",
  "interest": "MySQL",
  "name": "Baskar.C",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2012103042",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0eb2e35d91f7401000032"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "0",
  "bmonth": "8",
  "byear": "1995",
  "dept": "Department of Computer Science Engineering",
  "email": "Karthik@gmail.com",
  "interest": "MongoDB",
  "name": "Karthik.B",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2012103043",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0eb6c35d91f7401000033"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "30",
  "bmonth": "7",
  "byear": "1995",
  "dept": "Department of Computer Science Engineering",
  "email": "bala@gmail.com",
  "interest": "MongoDB",
  "name": "Bala.D",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2012103044",
  "sex": "female"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0eb9935d91f7401000034"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "15",
  "bmonth": "9",
  "byear": "1995",
  "dept": "Department of Computer Science Engineering",
  "email": "james@gmail.com",
  "interest": "MySQL",
  "name": "James.S",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2012103045",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0ebfe35d91f7401000036"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "25",
  "bmonth": "9",
  "byear": "1994",
  "dept": "Department of Computer Science Engineering",
  "email": "vino@gmail.com",
  "interest": "MySQL",
  "name": "Vinotha.S",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2012103047",
  "sex": "female"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0ec5835d91f7401000038"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "5",
  "bmonth": "8",
  "byear": "1995",
  "dept": "Department of Computer Science Engineering",
  "email": "shriya@gmail.com",
  "interest": "MySQL",
  "name": "Shriya.S",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2012103049",
  "sex": "female"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0e5f635d91f7401000029"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "23",
  "bmonth": "2",
  "byear": "1995",
  "dept": "Department of Computer Science Engineering",
  "email": "vinobaganesan@gmail.com",
  "interest": "MongoDB",
  "name": "vinoba.G",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "201210386",
  "sex": "female"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0e95335d91f9c12000029"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "6",
  "bmonth": "9",
  "byear": "1995",
  "dept": "Department of Computer Science Engineering",
  "email": "shanjhunaa@gmail.com",
  "interest": "MySQL",
  "name": "shanjhunaa.G",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2012103056",
  "sex": "female"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0ebd935d91f7401000035"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "25",
  "bmonth": "11",
  "byear": "1995",
  "dept": "Department of Computer Science Engineering",
  "email": "janani@gmail.com",
  "interest": "MySQL",
  "name": "Janani.S",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2012103046",
  "sex": "female"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e0ec1f35d91f7401000037"),
  "aboutme": "A proud student of CEG belonging to The Department of Computer Science Engineering.",
  "bday": "11",
  "bmonth": "6",
  "byear": "1995",
  "dept": "Department of Computer Science Engineering",
  "email": "shwetha@gmail.com",
  "interest": "MySQL",
  "name": "Shwetha.S",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2012103048",
  "sex": "female"
});
