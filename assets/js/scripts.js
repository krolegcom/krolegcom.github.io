function ready(fn) {
  if (document.readyState != 'loading'){
    fn();
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
}

ready( () => {
	/* расставить SVG */
	document.querySelectorAll('.i-svg').forEach(function(elem) {
		var s = elem.dataset.symbol;
		elem.innerHTML = '<svg class="icon"><use xlink:href="/assets/js/sprite.svg?' + (new Date().getTime()) + '#' + s + '" href="/assets/js/sprite.svg#' + s + '"></use></svg>'
	});
	
	/* slider  */
	document.querySelectorAll('input[type=range]').forEach(function(elem) {
		elem.oninput = function() {
			let value = (this.value-this.min)/(this.max-this.min)*100,
				real_val = this.value,
				id = elem.getAttribute('id');	
			// хак для Хрома (slider)
			this.style.background = 'linear-gradient(to right, #2EB670 0%, #2EB670 ' + value + '%, #DBDCDE ' + value + '%, #DBDCDE 100%)'
			// отображения значения
			document.getElementById(id + '_val').innerHTML = real_val + 'px';
	
		};
		elem.oninput();
	})
	
	/* копировать в буфер */
	document.querySelectorAll('.i-copy').forEach(function(elem) {
		elem.onclick = function() {
			elem.previousElementSibling.select()
			document.execCommand("copy");
		};
	})
	
	/* смена валют */
	document.getElementById('currency').onchange = function() {
		document.getElementById('currency-wrapper').dataset.currency = this.value;
	}
	
	/* показать меню при клике на сендвич */
	document.getElementById('menu__sandwich').onclick = function() {
		this.querySelectorAll('.i-menu__sandwich__ico').forEach(function(elem) {
			elem.classList.toggle('none');
		})
		document.getElementById('wrapper').classList.toggle('b-wrapper_overlay');
		document.getElementById('menu__list').classList.toggle('b-menu__list_opened');		
	}
	
	

});