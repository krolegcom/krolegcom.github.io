function ready(fn) {
  if (document.readyState != 'loading'){
    fn();
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
}

function generateSVG(obj) {
	var s = obj.dataset.symbol;
	obj.innerHTML = '<svg class="icon"><use xlink:href="/assets/js/sprite.svg?' + (new Date().getTime()) + '#' + s + '" href="/assets/js/sprite.svg#' + s + '"></use></svg>'
}

ready( () => {
	document.querySelectorAll('.i-svg').forEach(function(elem) {
		generateSVG( elem );
	});
	
	
	document.querySelectorAll('input[type=range]').forEach(function(elem) {
		elem.oninput = function() {
			var value = (this.value-this.min)/(this.max-this.min)*100
			this.style.background = 'linear-gradient(to right, #2EB670 0%, #2EB670 ' + value + '%, #DBDCDE ' + value + '%, #DBDCDE 100%)'
		};
		elem.oninput();
	})
});