
/** club indexes **/
db.getCollection("club").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** clubmem indexes **/
db.getCollection("clubmem").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** event indexes **/
db.getCollection("event").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** post indexes **/
db.getCollection("post").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

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

/** status indexes **/
db.getCollection("status").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** student indexes **/
db.getCollection("student").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** tags indexes **/
db.getCollection("tags").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** user indexes **/
db.getCollection("user").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** club records **/
db.getCollection("club").insert({
  "_id": ObjectId("52c83b92643b1fc00500002a"),
  "clubid": "1",
  "clubname": "sakthi",
  "mail": "sakthi@gmail.com",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "cname1": "123",
  "cnum1": "123",
  "cname2": "123",
  "cnum2": "123",
  "description": "sakthi club na mass da"
});
db.getCollection("club").insert({
  "_id": ObjectId("52dab4c1643b1fa006000029"),
  "clubid": "2",
  "clubname": "ExtraByte",
  "mail": "ExtraByte@gmail.com",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "cname1": "123",
  "cnum1": "123",
  "cname2": "123",
  "cnum2": "123",
  "description": "EB at your service!"
});

/** clubmem records **/
db.getCollection("clubmem").insert({
  "_id": ObjectId("52cfda07643b1f3c1d000029"),
  "clubid": "1",
  "directors": [
    "check"
  ],
  "president": "2012103023",
  "vice_president": "sakthi"
});

/** event records **/
db.getCollection("event").insert({
  "_id": ObjectId("52cfdc11643b1f641c000029"),
  "name": "as",
  "description": "sa",
  "startDate": ISODate("2014-01-11T11:30:00.0Z"),
  "endDate": ISODate("2014-01-11T12:00:00.0Z"),
  "location": "SnH 110",
  "target": [
    "First Years",
    "Second Years",
    "Third Years"
  ],
  "type": "Individual",
  "createdBy": "52c6b028643b1fa00f000029"
});

/** post records **/

/** projectwaiting records **/
db.getCollection("projectwaiting").insert({
  "_id": "4108050209",
  "area": "Portal",
  "count": NumberInt(1),
  "dept": "Department of Computer Science Engineering",
  "description": "This is a project to create and implement a resource sharing portal to allow student of CSE department to share resources such as documents and images with each other.",
  "i": NumberInt(1),
  "members": [
    ObjectId("52c69719bdb809dc128b4567"),
    ObjectId("52e0ec5835d91f7401000038"),
    ObjectId("52e0ebd935d91f7401000035")
  ],
  "pname": "Resource sharing portal",
  "regno": "2012103037",
  "sid": "3",
  "sname": " Dr. Rajeswari Sridhar",
  "staffrec": false,
  "status": "accepted",
  "tags": [
    "portal",
    "student",
    "resource",
    "sharing",
    "documents",
    "images"
  ]
});
db.getCollection("projectwaiting").insert({
  "_id": "2212294583",
  "dept": "Department of Computer Science Engineering",
  "pname": "K! Student Portal",
  "status": "waiting",
  "sid": "10008",
  "regno": "2012103037",
  "sname": "Dr. K.S. Easwarakumar",
  "members": [
    ObjectId("52c69719bdb809dc128b4567"),
    ObjectId("52e0e3f1bdb809fc268b456a"),
    ObjectId("52e0e456bdb8090f278b456a"),
    ObjectId("52e0e42dbdb809fd268b456a"),
    ObjectId("52e0e3c6bdb809542e8b4569")
  ],
  "description": "This is a student portal created to keep track, maintain and allow sharing of different projects and events taking place in the college among the students and staff.",
  "tags": [
    "portal",
    "php",
    "student",
    "mongo",
    "kurukshetra"
  ],
  "area": "Portal"
});
db.getCollection("projectwaiting").insert({
  "_id": "450215437",
  "dept": "Department of Computer Science Engineering",
  "pname": "Marks Tracking app",
  "status": "waiting",
  "sid": "10007",
  "regno": "2012103037",
  "sname": " Dr. T.V. Geetha",
  "members": [
    ObjectId("52e0ebd935d91f7401000035"),
    ObjectId("52e0ea7835d91f9c1200002c")
  ],
  "description": "An app to allow student to track and keep record of their internal marks and CGPA in order to help them concentrate on subjects they are weaker in.",
  "tags": [
    "app",
    "mobile",
    "android",
    "iOS",
    "marks",
    "gpa",
    "cgpa",
    "tracking"
  ],
  "area": "Mobile App"
});
db.getCollection("projectwaiting").insert({
  "_id": "1842515611",
  "dept": "Department of Electronics and Communication Engineering",
  "pname": "Beam-Forming algorithm for ultra sound imaging",
  "status": "waiting",
  "sid": "130001",
  "regno": "2010105691",
  "sname": "Dr.P.V.Ramakrishna",
  "members": [
    ObjectId("52e22f0f643b1fc813000033"),
    ObjectId("52e23139643b1fc813000035")
  ],
  "description": "Diagnostic sonography (ultrasonography) is an ultrasound-based diagnostic imaging technique used for visualizing subcutaneous body structures including tendons, muscles, joints, vessels and internal organs for possible pathology or lesions. The practice of examining pregnant women using ultrasound is called obstetric sonography, and is widely used",
  "tags": [
    "beam",
    "algorithm",
    "ultra"
  ],
  "area": "ultra sound"
});
db.getCollection("projectwaiting").insert({
  "_id": "-206169288",
  "dept": "Department of Electronics and Communication Engineering",
  "pname": "speech analysis: voice grouping ,characterization and speaker verification",
  "status": "waiting",
  "sid": "130001",
  "regno": "2010105024",
  "sname": "Dr.P.V.Ramakrishna",
  "members": [
    ObjectId("52e23139643b1fc813000035"),
    ObjectId("52e231e4643b1fc813000036")
  ],
  "description": "Analysis of speech sounds taking into consideration their method of production\r\nThe level of processing between the digitised acoustic waveform and the acoustic feature vectors.\r\nThe extraction of ``interesting'' information as an acoustic vector.",
  "tags": [
    "speech",
    "voice"
  ],
  "area": "speech  analysis"
});
db.getCollection("projectwaiting").insert({
  "_id": "-2068763730",
  "dept": "Department of Electronics and Communication Engineering",
  "pname": "parabolic reflector focused solar tracking system  with improved efficiency",
  "status": "waiting",
  "sid": "130001",
  "regno": "2010105064",
  "sname": "Dr.P.V.Ramakrishna",
  "members": [
    ObjectId("52e23276643b1fc813000037"),
    ObjectId("52e232c6643b1fc813000038")
  ],
  "description": "Solar Tracking System is a device for orienting a solar panel or concentrating a solar reflector or lens towards the sun. Concentrators, especially in solar cell applications, require a high degree of accuracy to ensure that the concentrated sunlight is directed precisely to the powered device. Precise tracking of the sun is achieved through systems with single or dual axis tracking.\r\n",
  "tags": [
    "reflector",
    "solar tracking"
  ],
  "area": "solar tracking"
});
db.getCollection("projectwaiting").insert({
  "_id": "498629140",
  "dept": "Department of Electronics and Communication Engineering",
  "pname": "security in wireless body area network (WBAN)",
  "status": "waiting",
  "sid": "130001",
  "regno": "2010105038",
  "sname": "Dr.P.V.Ramakrishna",
  "members": [
    ObjectId("52e2333d643b1fc813000039"),
    ObjectId("52e23384643b1fc81300003a")
  ],
  "description": "A typical wireless body area network (WBAN) comprises of a number of wireless sensor nodes and a body gateway. It is a disributed system with various hardware configurations and operating systems. The middlewware layer bridges between applications and the underlying networking\/RTOS protocol stack so as to simplify the application development, and make codes re-usable from one application to another",
  "tags": [
    "security",
    "wireless"
  ],
  "area": "wireless body area network"
});
db.getCollection("projectwaiting").insert({
  "_id": "-100641005",
  "dept": "Department of Electronics and Communication Engineering",
  "pname": "speech recognition based wireless automation of home loads with fault identification for physically challenged",
  "status": "waiting",
  "sid": "130001",
  "regno": "2010105552",
  "sname": "Dr.P.V.Ramakrishna",
  "members": [
    ObjectId("52e233ec643b1fc81300003b"),
    ObjectId("52e23432643b1fc81300003c")
  ],
  "description": "The design of this project helps in providing a fool proof solution for physically challenged to control their home appliances by giving voice commands through personal computer in a wireless environment. When automating a home load not available in the visible range, Fault identification system in this design helps the user to ensure that their home appliances had gone exactly ON or OFF or undergone FAULT by getting the status from load end, unlike the other design that gets the status at user end which may give a false indication, when power supply is not available for the particular load or when load get open circuited (due to wire discontinuity or open fuse condition). During user screen navigation and controlling home appliances voice output of the current screen information and status of the automated appliances enables visually impaired person to use the system to control their home appliances. Navigation of the screen by giving voice commands enables paralyzed person and person who lost their hands in an unfortunate accident to control their home loads along with normal person. For achieving wireless environment low cost zigbee is used. To provide security based authentication RFID is used. Each home load will be having two commands ON and OFF commands, Automation of 20 loads such as mixer, grinder, TV, refrigerator, fan, light, AC etc..., has been tested by giving 40 voice commands through personal computer. When user creates his own profile and automates the load speech recognition accuracy of more than 90% is achieved. Other people who were allowed to automate the load by the user can use user profile and achieve a speech recognition accuracy of 75% in the same personal computer.",
  "tags": [
    "wireless",
    "speech",
    "physically challenged"
  ],
  "area": "speech recognition"
});
db.getCollection("projectwaiting").insert({
  "_id": "-1928894587",
  "dept": "Department of Electronics and Communication Engineering",
  "pname": "Energy efficiency in LTE  small cell network",
  "status": "waiting",
  "sid": "130004",
  "regno": "2010105025",
  "sname": "Dr. M. Meenakshi ",
  "members": [
    ObjectId("52e23600643b1fc813000041"),
    ObjectId("52e2363f643b1fc813000042")
  ],
  "description": "Heterogeneous network, or HetNet, deployments are one of the key enablers in providing ubiquitous coverage and capacity enhancements for LTE-Advanced networks. They play an important role in achieving high data rate and quality of service requirements defined for next generation wireless networks. In this article we evaluate various cell discovery techniques tailored for energy-efficient detection of small cells deployed in a carrier other than the serving macrocell. The presented schemes are evaluated using extensive system simulations conducted in a 3GPP LTE-Advanced HetNet scenario. Shortcomings of the currently standardized mechanism are analyzed, and advantages of the evaluated schemes are presented. Both the offloading opportunity utilization and savings in UE battery power consumption are analyzed. The results show that using the considered flexible, adaptive, and intelligent schemes for small cell discovery, significant UE power savings can be achieved with small loss in offloading - giving benefits both on system level as well as in user experience.",
  "tags": [
    "energy",
    "network"
  ],
  "area": "small cell network"
});

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
db.getCollection("staff").insert({
  "_id": ObjectId("52e222f4643b1fc813000029"),
  "bday": "2",
  "bmonth": "may",
  "byear": "1963",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "ramakrishna@ece.annauniv.edu ",
  "name": "Dr.P.V.Ramakrishna",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "phone": "9878967541",
  "rank": "Professor",
  "sex": "male",
  "specialization": "Wireless Communication and Adhoc Networks",
  "staffid": "130001"
});
db.getCollection("staff").insert({
  "_id": ObjectId("52e223fa643b1fc81300002a"),
  "bday": "2",
  "bmonth": "may",
  "byear": "1963",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "shamugavel@ece.annauniv.edu ",
  "name": "Dr. S. Shanmugavel",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "phone": "9878967541",
  "rank": "Professor",
  "sex": "male",
  "specialization": "Digital Signal and Image Processing",
  "staffid": "130002"
});
db.getCollection("staff").insert({
  "_id": ObjectId("52e224a9643b1fc81300002b"),
  "bday": "2",
  "bmonth": "may",
  "byear": "1963",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "devi@ece.annauniv.edu ",
  "name": "Dr. S. Shenbagadevi ",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "phone": "9878967541",
  "rank": "Professor",
  "sex": "female",
  "specialization": "ICT Applications in Medicine",
  "staffid": "130003"
});
db.getCollection("staff").insert({
  "_id": ObjectId("52e22505643b1fc81300002c"),
  "bday": "2",
  "bmonth": "may",
  "byear": "1963",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "meena@ece.annauniv.edu ",
  "name": "Dr. M. Meenakshi ",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "phone": "9878967541",
  "rank": "Professor",
  "sex": "female",
  "specialization": "Bio-signal Processing",
  "staffid": "130004"
});
db.getCollection("staff").insert({
  "_id": ObjectId("52e22565643b1fc81300002d"),
  "bday": "2",
  "bmonth": "may",
  "byear": "1963",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "bhagyaveni@ece.annauniv.edu ",
  "name": "Dr. M. A. Bhagyaveni ",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "phone": "9878967541",
  "rank": "Professor",
  "sex": "female",
  "specialization": "Wireless Networks",
  "staffid": "130005"
});
db.getCollection("staff").insert({
  "_id": ObjectId("52e225f6643b1fc81300002e"),
  "bday": "2",
  "bmonth": "may",
  "byear": "1963",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "viji@ece.annauniv.edu ",
  "name": "Mrs. N. Vijaya ",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "phone": "9878967541",
  "rank": "Assistant Professor",
  "sex": "female",
  "specialization": "Applied Electronics",
  "staffid": "130006"
});
db.getCollection("staff").insert({
  "_id": ObjectId("52e2268a643b1fc81300002f"),
  "bday": "2",
  "bmonth": "may",
  "byear": "1963",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "nirmala@ece.annauniv.edu ",
  "name": "Dr. S. Nirmaladevi ",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "phone": "9878967541",
  "rank": "Assistant Professor",
  "sex": "female",
  "specialization": "Medical Electronics",
  "staffid": "130007"
});
db.getCollection("staff").insert({
  "_id": ObjectId("52e22752643b1fc813000030"),
  "bday": "2",
  "bmonth": "may",
  "byear": "1963",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "vel@ece.annauniv.edu ",
  "name": "Dr. P. Sakthivel",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "phone": "9878967541",
  "rank": "Associate Professor",
  "sex": "male",
  "specialization": "Applied Electronics",
  "staffid": "130008"
});
db.getCollection("staff").insert({
  "_id": ObjectId("52e22800643b1fc813000031"),
  "bday": "2",
  "bmonth": "may",
  "byear": "1963",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "seshasayana@ece.annauniv.edu ",
  "name": "Dr. R. Seshasayana",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "phone": "9878967541",
  "rank": "Associate Professor",
  "sex": "male",
  "specialization": "Low Power VLSI",
  "staffid": "130009"
});
db.getCollection("staff").insert({
  "_id": ObjectId("52e228a5643b1fc813000032"),
  "bday": "2",
  "bmonth": "may",
  "byear": "1963",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "ramadass@ece.annauniv.edu ",
  "name": "Dr. N. Ramadass",
  "password": "e10adc3949ba59abbe56e057f20f883e",
  "phone": "9878967541",
  "rank": "Associate Professor",
  "sex": "male",
  "specialization": "VLSI and Embedded Systems",
  "staffid": "130010"
});

/** status records **/

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
db.getCollection("student").insert({
  "_id": ObjectId("52e22f0f643b1fc813000033"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, scholarship and kindness. These are hard and true facts, but there is a lot I do not know about myself. I don't know how I feel about the death penalty, I have mixed feelings about religion, and I don't know what I think about a cashless society. I have no stock answer to offer about a life-changing experience or a moment of enlightenment, and it is hard for me to give a comprehensive proclamation of who I am, for my identity unfolds more every day as my experiences grow. Since I am only 21 years old, life has a lot of unfolding to do.",
  "bday": "5",
  "bmonth": "8",
  "byear": "1992",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "satyan@gmail.com",
  "interest": [
    "vlsi",
    "embedded systems"
  ],
  "name": "Satyan.S",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105691",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e230c7643b1fc813000034"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, sc [...]",
  "bday": "1",
  "bmonth": "3",
  "byear": "1993",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "karthikc@gmail.com",
  "interest": [
    "VLSI",
    "DSP"
  ],
  "name": "Karthik Chellapan",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105037",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e23139643b1fc813000035"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, sc [...]",
  "bday": "12",
  "bmonth": "3",
  "byear": "1992",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "shree@gmail.com",
  "interest": [
    "VLSI",
    "Networking"
  ],
  "name": "Shreeraman",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105024",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e231e4643b1fc813000036"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, sc [...]",
  "bday": "12",
  "bmonth": "12",
  "byear": "1992",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "shruthi@gmail.com",
  "interest": [
    "Digital Image Processing",
    "Digital Signal Processing"
  ],
  "name": "Shruthi Sukumar",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105053",
  "sex": "female"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e23276643b1fc813000037"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, sc [...]",
  "bday": "12",
  "bmonth": "9",
  "byear": "1992",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "kaavya@gmail.com",
  "interest": [
    "VLSI",
    "Embedded systems"
  ],
  "name": "Kanmani kaavya",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105064",
  "sex": "female"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e232c6643b1fc813000038"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, sc [...]",
  "bday": "30",
  "bmonth": "9",
  "byear": "1992",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "vishaal@gmail.com",
  "interest": [
    "DSP",
    "Embedded systems"
  ],
  "name": "Vishaal Reddy",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105703",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e2333d643b1fc813000039"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, sc [...]",
  "bday": "11",
  "bmonth": "11",
  "byear": "1992",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "Kiruba@gmail.com",
  "interest": [
    "DSP",
    "Digital Image Processing"
  ],
  "name": "Kirubakaran K",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105038",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e23384643b1fc81300003a"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, sc [...]",
  "bday": "14",
  "bmonth": "10",
  "byear": "1992",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "sri@gmail.com",
  "interest": [
    "DSP",
    "Digital Image Processing"
  ],
  "name": "Sridhar V T",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105628",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e233ec643b1fc81300003b"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, sc [...]",
  "bday": "10",
  "bmonth": "12",
  "byear": "1992",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "sangeetha1992@gmail.com",
  "interest": [
    "VLSI",
    "Digital Image Processing"
  ],
  "name": "Sangeetha S",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105552",
  "sex": "female"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e23432643b1fc81300003c"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, sc [...]",
  "bday": "11",
  "bmonth": "1",
  "byear": "1993",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "sumee123@gmail.com",
  "interest": [
    "DSP",
    "Digital Image Processing"
  ],
  "name": "Sumeetha G",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105562",
  "sex": "female"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e234b1643b1fc81300003d"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, sc [...]",
  "bday": "1",
  "bmonth": "3",
  "byear": "1993",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "franksis@gmail.com",
  "interest": [
    "VLSI",
    "Embedded systems"
  ],
  "name": "Joel Frank",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105656",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e234f2643b1fc81300003e"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, sc [...]",
  "bday": "17",
  "bmonth": "4",
  "byear": "1993",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "Gobi789@gmail.com",
  "interest": [
    "VLSI",
    "Embedded systems"
  ],
  "name": "Gobinath S M",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105650",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e2354e643b1fc81300003f"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, sc [...]",
  "bday": "16",
  "bmonth": "3",
  "byear": "1993",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "Harihari@gmail.com",
  "interest": [
    "DSP",
    "Embedded systems"
  ],
  "name": "Hariharan R",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105517",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e23597643b1fc813000040"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, sc [...]",
  "bday": "16",
  "bmonth": "3",
  "byear": "1993",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "krish345@gmail.com",
  "interest": [
    "DSP",
    "DIP"
  ],
  "name": "Harikrishna R",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105518",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e23600643b1fc813000041"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, sc [...]",
  "bday": "18",
  "bmonth": "8",
  "byear": "1992",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "srisri34@gmail.com",
  "interest": [
    "DSP",
    "DIP"
  ],
  "name": "Srinidhi A",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105025",
  "sex": "female"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e2363f643b1fc813000042"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, sc [...]",
  "bday": "18",
  "bmonth": "7",
  "byear": "1992",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "srisri34@gmail.com",
  "interest": [
    "Embedded Systems",
    "VLSI"
  ],
  "name": "Nithya S",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105538",
  "sex": "female"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e236c7643b1fc813000043"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, sc [...]",
  "bday": "14",
  "bmonth": "6",
  "byear": "1992",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "sukanya@gmail.com",
  "interest": [
    "Embedded Systems",
    "VLSI"
  ],
  "name": "Sukanya S",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105697",
  "sex": "female"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e2372c643b1fc813000044"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, sc [...]",
  "bday": "23",
  "bmonth": "8",
  "byear": "1992",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "vel34@gmail.com",
  "interest": [
    "Embedded Systems",
    "DSP"
  ],
  "name": "Karthikeyan Velappan",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105065",
  "sex": "male"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e2378e643b1fc813000045"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, sc [...]",
  "bday": "24",
  "bmonth": "9",
  "byear": "1992",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "abiabi93@gmail.com",
  "interest": [
    "DSP",
    "VLSI"
  ],
  "name": "Abirami G",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105030",
  "sex": "female"
});
db.getCollection("student").insert({
  "_id": ObjectId("52e237e7643b1fc813000046"),
  "aboutme": "I like reading The Economist and watching I love the 80s. I like tennis, Fazoli's breadsticks and writing assignments. I value honesty, commitment, sc [...]",
  "bday": "20",
  "bmonth": "10",
  "byear": "1992",
  "dept": "Department of Electronics and Communication Engineering",
  "email": "kastoori456@gmail.com",
  "interest": [
    "Embedded Systems",
    "VLSI"
  ],
  "name": "Kastoori S",
  "password": "1bfad22f0925978f310a37440bfdff43",
  "regno": "2010105661",
  "sex": "female"
});

/** system.indexes records **/
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "ns": "kdb.status",
  "name": "_id_"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "ns": "kdb.user",
  "name": "_id_"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "ns": "kdb.post",
  "name": "_id_"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "ns": "kdb.staff",
  "name": "_id_"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "ns": "kdb.event",
  "name": "_id_"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "ns": "kdb.projectwaiting",
  "name": "_id_"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "ns": "kdb.student",
  "name": "_id_"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "ns": "kdb.club",
  "name": "_id_"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "ns": "kdb.clubmem",
  "name": "_id_"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "ns": "kdb.tags",
  "name": "_id_"
});

/** tags records **/
db.getCollection("tags").insert({
  "_id": ObjectId("52e20e42bdb809e81c8b4567"),
  "name": "portal",
  "projects": [
    "4108050209",
    "2212294583"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e20f0ebdb809bc278b4567"),
  "name": "php",
  "projects": [
    "2212294583"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e20e42bdb809e81c8b4568"),
  "name": "student",
  "projects": [
    "4108050209",
    "2212294583"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e20f0ebdb809bc278b4568"),
  "name": "mongo",
  "projects": [
    "2212294583"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e20f0ebdb809bc278b4569"),
  "name": "kurukshetra",
  "projects": [
    "2212294583"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e210f8bdb809c8278b4567"),
  "name": "app",
  "projects": [
    "450215437"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e210f8bdb809c8278b4568"),
  "name": "mobile",
  "projects": [
    "450215437"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e210f8bdb809c8278b4569"),
  "name": "android",
  "projects": [
    "450215437"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e210f8bdb809c8278b456a"),
  "name": "iOS",
  "projects": [
    "450215437"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e210f8bdb809c8278b456b"),
  "name": "marks",
  "projects": [
    "450215437"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e210f8bdb809c8278b456c"),
  "name": "gpa",
  "projects": [
    "450215437"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e210f8bdb809c8278b456d"),
  "name": "cgpa",
  "projects": [
    "450215437"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e210f8bdb809c8278b456e"),
  "name": "tracking",
  "projects": [
    "450215437"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e23a30643b1ff425000029"),
  "name": "beam",
  "projects": [
    "1842515611"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e23a31643b1ff42500002a"),
  "name": "algorithm",
  "projects": [
    "1842515611"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e23a31643b1ff42500002b"),
  "name": "ultra",
  "projects": [
    "1842515611"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e23bea643b1fc813000047"),
  "name": "speech",
  "projects": [
    "-206169288"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e23bea643b1fc813000048"),
  "name": "voice",
  "projects": [
    "-206169288"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e23cee643b1f2c1f000029"),
  "name": "reflector",
  "projects": [
    "-2068763730"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e23cee643b1f2c1f00002a"),
  "name": "solar tracking",
  "projects": [
    "-2068763730"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e23dba643b1fdc24000029"),
  "name": "security",
  "projects": [
    "498629140"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e23dba643b1fdc2400002a"),
  "name": "wireless",
  "projects": [
    "498629140"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e23eb8643b1f081b000029"),
  "name": "wireless ",
  "projects": [
    "1790921346"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e23eb8643b1f081b00002a"),
  "name": "physically challenged",
  "projects": [
    "1790921346"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e20e42bdb809e81c8b4569"),
  "name": "speech",
  "projects": [
    "-206169288",
    "1790921346"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e20e42bdb809e81c8b456a"),
  "name": "wireless",
  "projects": [
    "498629140",
    "1790921346"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e20e42bdb809e81c8b456b"),
  "name": "speech",
  "projects": [
    "-206169288",
    "1790921346"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e20e42bdb809e81c8b456c"),
  "name": "physically challenged",
  "projects": [
    "1790921346",
    "1790921346"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e2409c643b1fc813000049"),
  "name": "energy",
  "projects": [
    "-1928894587"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e2409c643b1fc81300004a"),
  "name": "network",
  "projects": [
    "-1928894587"
  ]
});

/** user records **/
db.getCollection("user").insert({
  "_id": ObjectId("52c5621d643b1f4c0e000029"),
  "fname": "elaiya",
  "lname": "bharathi",
  "email": "elaiyabharathi.c@gmail.com",
  "password": "123456",
  "sex": "male",
  "day": "18",
  "month": "February",
  "year": "1995"
});
