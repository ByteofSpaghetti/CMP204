var Team = [ //array containing team infromation and path to Team images
    {
      image: "images/Team-1.jpg",
      info: "Hi I am Chris! I am the team captain of Ipsum of Lorem. About me:  Et sollicitudin ac orci phasellus. Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. Tortor posuere ac ut consequat semper viverra nam. Sit amet consectetur adipiscing elit ut aliquam purus sit. Eget est lorem ipsum dolor sit amet consectetur adipiscing elit. Pulvinar pellentesque habitant morbi tristique senectus et netus et malesuada. Nec nam aliquam sem et tortor consequat id. In vitae turpis massa sed elementum tempus egestas. A diam maecenas sed enim ut sem viverra. Diam sollicitudin tempor id eu nisl nunc mi ipsum. Magna ac placerat vestibulum lectus mauris ultrices eros in cursus."
    },
    {
      image: "images/Team-2.jpg",
      info: "Hi! I am Greggos. Team organiser of Ipsum of Lorem. About me: Et sollicitudin ac orci phasellus. Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. Tortor posuere ac ut consequat semper viverra nam. Sit amet consectetur adipiscing elit ut aliquam purus sit. Eget est lorem ipsum dolor sit amet consectetur adipiscing elit. Pulvinar pellentesque habitant morbi tristique senectus et netus et malesuada. Nec nam aliquam sem et tortor consequat id. In vitae turpis massa sed elementum tempus egestas. A diam maecenas sed enim ut sem viverra. Diam sollicitudin tempor id eu nisl nunc mi ipsum. Magna ac placerat vestibulum lectus mauris ultrices eros in cursus.."
    },
    {
      image: "images/team-3.jpg",
      info: "Hi! I am Oat, The best at rocket league at Ipsum of Lorem . About me: Posuere sollicitudin aliquam ultrices sagittis. Tellus in hac habitasse platea dictumst. Sit amet nisl purus in mollis nunc sed. Nunc consequat interdum varius sit amet mattis vulputate. Bibendum at varius vel pharetra. Sodales ut etiam sit amet nisl purus. Mauris vitae ultricies leo integer malesuada nunc vel risus. Sit amet nisl suscipit adipiscing. Non quam lacus suspendisse faucibus interdum posuere lorem ipsum. Et magnis dis parturient montes nascetur ridiculus. Nisl nunc mi ipsum faucibus. Ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. Lacinia quis vel eros donec ac odio tempor orci. Aliquam sem et tortor consequat id. Adipiscing commodo elit at imperdiet dui accumsan sit amet nulla. Sed viverra ipsum nunc aliquet. Eu lobortis elementum nibh tellus molestie nunc non blandit massa. Commodo odio aenean sed adipiscing diam donec adipiscing tristique risus.."
    },
    {
      image: "images/Team-4.jpg",
      info: "Hi! I am Chrisetta. Team procrastinator. About me: Eget nulla facilisi etiam dignissim diam quis enim. Netus et malesuada fames ac turpis egestas. Hendrerit dolor magna eget est lorem ipsum dolor. Nunc id cursus metus aliquam eleifend mi in. Urna et pharetra pharetra massa massa ultricies mi quis hendrerit. Eget nunc scelerisque viverra mauris. Mattis enim ut tellus elementum sagittis vitae et leo. Adipiscing at in tellus integer feugiat scelerisque varius morbi. Nunc sed velit dignissim sodales ut. Eu nisl nunc mi ipsum. Diam ut venenatis tellus in metus vulputate. Amet nisl purus in mollis nunc sed id semper. Enim sed faucibus turpis in. Aliquet lectus proin nibh nisl condimentum id venenatis a. Nam aliquam sem et tortor consequat id porta nibh venenatis. Amet dictum sit amet justo donec enim diam vulputate. Arcu non sodales neque sodales ut etiam sit. Faucibus turpis in eu mi. Id donec ultrices tincidunt arcu non.."
    }
  ];
  
  var currentIndex = 1;//sets variable current index to 1
  function changeTeam() { //creates changeTeam function
    var TeamImage = document.getElementById("TeamImage");//get TeamImage by ID
    var TeamInfo = document.getElementById("TeamInfo");//getTeamInfo by ID
    
    TeamImage.src = Team[currentIndex].image;//change image based on the value of currentIndex
    TeamInfo.textContent = Team[currentIndex].info;//change info based on currentIndex
    
    currentIndex++; //increment currentIndex
    
    if (currentIndex >= Team.length) { //if currentIndex is more than equal to length of Team array set currentIndex to 0
      currentIndex = 0;
    }  
  }

$(document).ready(function() { //document ready function
    $('#confirm-password').on('keyup', function() {//eventlistener on input box with id of confirm-password
        var password = $('#Password').val();//gets value of input box with id of password
        var confirmPassword = $(this).val(); //gets value of input with confirm-password ID

        if (password != confirmPassword) //executes if password does not equal confirmPassword 
        {
            $('#password-error1').html('Passwords do not match!');//writes to html code with ID of password-error1
        }
        else {
            $('#password-error1').html('');//else writes nothing to html
        }
 });    
});

var countDownDate = new Date("May 25, 2024 12:09:00").getTime();// creates variable countDownDate which is equal to new date object with given time using getTime function

var timer = setInterval(function() { //timer equals setInterval function 
  var present = new Date().getTime(); //present variable equals new Date object using getTime function
  var timeCalc = countDownDate - present;//variable timeCalc equals countDownDate variable minus the present date

  var days = Math.floor(timeCalc / (1000 * 60 * 60 * 24));//calculation for days
  var hours = Math.floor((timeCalc % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));//calculation for hours
  var minutes = Math.floor((timeCalc % (1000 * 60 * 60)) / (1000 * 60)); //calculation for minutes
  var seconds = Math.floor((timeCalc % (1000 * 60)) / 1000);//calculation for seconds

  document.getElementById("countdown").innerHTML = days + "d " + hours + "h "+ minutes + "m " + seconds + "s ";//outputs days, hours, minutes and seconds to element with ID countdown

  if (timeCalc < 0) {//if timeCalc variable is less than 0
    clearInterval(timer);//clear interval
    document.getElementById("countdown").innerHTML = "Event has passed!";//get element with id countdown and ouptu Event has passed!
  }
}, 1000);//repeat once per second

function loadDocPrev() {//creates loadDocPrev
	
	var x = new XMLHttpRequest();//creates variable x equal to new XMLHtppRequest object
	
	x.onreadystatechange = function() {
	
    if (this.readyState == 4 && this.status == 200) {//if state equal 4 and status equals 200 then get element with ID next and write the response text 
    	document.getElementById("next").innerHTML = this.responseText;
    }
  };
    x.open("GET", "jk.txt", true);//opens using a GET request a text file with name jk.text
  
    x.send();//send request
}

$(document).ready(function() {//create function ready 
  $("#previousButton").click(function(){//creates eventlistener on button with id previousButton
    $("#previous").load("jk2.txt")//loads and displays jk2.txt where ID is previous
  })
})
