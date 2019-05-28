

function toggleSearch(){

	document.getElementById('searchbar').style.display="block";
	

}
function toggleOffSearch(){
	document.getElementById('searchbar').style.display="none";

}

function countdown(){
		var naw = new Date();
		var event =new Date("August 1 ,2019 00:00:00" );

		var currentTime = naw.getTime();
		var eventDate = event.getTime();


		var realTime = eventDate-currentTime;
		console.log(realTime);
        
        
        var s = Math.floor(realTime/1000);
        var m = Math.floor(s/60);
        var h = Math.floor(m/60);
        var d = Math.floor(h/24);
        var w = Math.floor(d/7);
        
       
        h %= 24;
        s %= 60;
        m %= 60; 
        
        w =(w<10) ? "0" +w :w;
        h =(h<10) ? "0" +h :h;
        m =(m<10) ? "0" +m :m;
        s =(s<10) ? "0" +s :s;

         document.getElementById('w').innerHTML = w;
         document.getElementById('d').innerHTML = d;

         document.getElementById('h').innerHTML = h;
         document.getElementById('m').innerHTML = m;
         document.getElementById('s').innerHTML = s;

         setTimeout(countdown, 1000);
}
countdown();