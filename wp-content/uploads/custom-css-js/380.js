<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
			(function(){
					let mainEle = document.getElementById('pl-w5a5fc04cb2f0a');
					mainEle.addEventListener('click',ffHandler);
			})();
			function ffHandler(event){
				let eventTarget = event.target.closest('button');
				if(!eventTarget){return;}	
				let showHide = eventTarget.parentElement.previousElementSibling;
				let  ele = showHide.children[0];
				ele.classList.toggle("ffMoreData");
				if(eventTarget.children[0].innerHTML == "More"){
					eventTarget.children[0].innerHTML = "Less";
					eventTarget.children[0].title = "Less";
				}
				else{
					eventTarget.children[0].innerHTML = "More";
					eventTarget.children[0].title = "More";
				}
			}
</script></script>
<!-- end Simple Custom CSS and JS -->
