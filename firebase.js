var app_fireBase = {};
(function(){

  const firebaseConfig = {
    apiKey: "AIzaSyCSqKCpuIiVaWlBSZbC1YAf3ksW1WJSVr8",
    authDomain: "project-que-fb643.firebaseapp.com",
    databaseURL: "https://project-que-fb643.firebaseio.com",
    projectId: "project-que-fb643",
    storageBucket: "project-que-fb643.appspot.com",
    messagingSenderId: "83340579850",
    appId: "1:83340579850:web:ce5a65ac6994351e2abbf3",
    measurementId: "G-105XE8WP83"
  };

  firebase.initializeApp(firebaseConfig);
  app_fireBase = firebase;

})()