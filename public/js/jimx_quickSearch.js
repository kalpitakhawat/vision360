function jimxSearch(par){
	
		var searchArea = null,
			postArea = null,
			d=document,
			searchArea = par.sbox || "searchArea",
			postArea = par.sdata || "postArea",
			strToDisplay = par.sdisplay || "Showing results for: ",
			textBox = document.querySelector(par.textBox);

		//<input type="text" placeHolder="search anything.." /></div>
		function setDiv(){
			if( textBox != null ){
				return textBox
			}else{
				throw Error("textBox is null or not specified")
				return null
			}
			// var newSearchBox = d.createElement("input");
			var newSearchBox = d.getElementById("inputx");
			// newSearchBox.setAttribute("type","text");
			// newSearchBox.setAttribute("id","text");
			// newSearchBox.setAttribute("placeHolder","Search anything...");
			// d.getElementById(searchArea).appendChild(newSearchBox);
			return newSearchBox;
		}

		function showAll(searchArea){
			var postClass = d.getElementsByClassName(postArea);
			  	for (var i = 0 ; i < postClass.length; i++) { postClass[i].style.display="";};
		}

		function searchJimx()
		{
			// debugger
		  if(searchArea!=null && postArea!=null)
			{
				var postClass = d.getElementsByClassName(postArea);
				// var sbox = d.getElementById(searchArea)
				// .childNodes[0];
				// var infoDiv = sbox.parentNode.childNodes[1];
				// console.log(sbox);
				// return
				var strToSearch = setDiv().value.trim().toLowerCase();
				
				if(strToSearch == "" ){
					 showAll();
			 	}
			    else{
			
					// infoDiv.innerHTML = '<br><br><i>'+strToDisplay+'</i>" <b>'+strToSearch+'</b> "...';
					  	for (var i = 0 ; i < postClass.length; i++) {
							s = postClass[i].innerHTML.replace(/<[^>]*>/g, "").replace("&nbsp;"," ");
					 			if(s.toLowerCase().indexOf(strToSearch) > -1)	
								{
									postClass[i].style.display="";
								}
								else{
									postClass[i].style.display="none";
								}
						}
				}		
			}
		}
		
		window.onload=function(){
			// setDiv();
			// var sbox = d.getElementById(searchArea).childNodes[0];
			// var infoDiv = d.createElement("span");
			// sbox.parentNode.appendChild(infoDiv);	
			setDiv().addEventListener("keyup",searchJimx);
		}
	}

