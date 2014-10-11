
/** projectwaiting indexes **/
db.getCollection("projectwaiting").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** tags indexes **/
db.getCollection("tags").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

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

/** tags records **/
db.getCollection("tags").insert({
  "_id": ObjectId("52e20e42bdb809e81c8b4569"),
  "name": "resource",
  "projects": [
    "4108050209"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e20e42bdb809e81c8b456a"),
  "name": "sharing",
  "projects": [
    "4108050209"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e20e42bdb809e81c8b456b"),
  "name": "documents",
  "projects": [
    "4108050209"
  ]
});
db.getCollection("tags").insert({
  "_id": ObjectId("52e20e42bdb809e81c8b456c"),
  "name": "images",
  "projects": [
    "4108050209"
  ]
});
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
