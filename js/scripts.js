	var acc = document.getElementsByClassName("acordeao");
	var conteudo = document.getElementsByClassName('conteudo');

	for (var i = 0; i < acc.length; i++) {
	acc[i].onclick = function() {
	var setClasses = !this.classList.contains('active');
	setClass(acc, 'active', 'remove');
	setClass(conteudo, 'show', 'remove');

	if (setClasses) {
	this.classList.toggle("active");
	this.nextElementSibling.classList.toggle("show");
	}
	}
	}

	function setClass(els, className, fnName) {
	for (var i = 0; i < els.length; i++) {
	els[i].classList[fnName](className);
	}
	}


	window.addEventListener("load", function(event) {
    console.log("Todos os recursos terminaram o carregamento!");
	var animationBallet = document.querySelector('.ballet');
	setTimeout(function(){
		animationBallet.style.display = 'none';
	},1000);
  });

  const header = document.getElementById('header');
  window.addEventListener('scroll', (e)=>{
	  var scroll = this.scrollY;
		if(scroll >= 300){
			header.style.backgroundColor = "#ffffff";
		}else{
			header.style.backgroundColor = "transparent";
		}
  });
