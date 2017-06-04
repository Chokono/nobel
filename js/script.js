[].forEach.call(document.querySelectorAll('.steklo'), function(el){
	var t = [Math.floor(Math.random() * 220), Math.floor(Math.random() * 220), Math.floor(Math.random() * 220)];
	el.style.backgroundColor = 'rgba('+t[0]+','+t[1]+','+t[2]+',0.30)';
});
function createMyEl(obj) {
	var el = document.createElement(obj.nodeName);
	el.className = obj.classes;
	for (var i in obj.attr) {
		el.setAttribute(i, obj.attr[i]);
	};
	obj.parent.appendChild(el);
	return el;
}
if (document.getElementById('step1')) {
	var indexNow = document.getElementById('step1');
	var accordion = document.getElementById('main').querySelectorAll('.step');
	[].forEach.call(accordion, function(el){
		el.addEventListener('click', function(ev){
			if (el.classList.contains('turn')) {
				el.classList.remove('turn');
				el.parentNode.parentNode.style.height = el.offsetHeight+'px';
			} else {
				indexNow.classList.remove('turn');
				indexNow.parentNode.parentNode.style.height = indexNow.offsetHeight+'px';
				indexNow = el;
				indexNow.classList.add('turn');
				indexNow.parentNode.parentNode.style.height = indexNow.parentNode.offsetHeight+'px';
			}
		})
	});
	var addUniversity = document.getElementById('main').querySelectorAll('.addUniversity');
	[].forEach.call(addUniversity, function(el){
		el.addEventListener('click', function(){
			var univer = el.parentNode.querySelector('.univer');
			var univer1 = univer.cloneNode(true);
			univer.parentNode.insertBefore(univer1, el);
			univer.parentNode.parentNode.parentNode.style.height = univer.parentNode.parentNode.offsetHeight+'px';
		});
	});
	var buttonsSteps = document.getElementById('main').querySelectorAll('.nextStep');
	[].forEach.call(buttonsSteps, function(el, index){
		el.addEventListener('click', function(ev){
			ev.preventDefault();
			if (index !== (buttonsSteps.length-1)){
				indexNow.classList.remove('turn');
				indexNow.parentNode.parentNode.style.height = indexNow.offsetHeight+'px';
				indexNow = accordion[index+1];
				indexNow.classList.add('turn');
				indexNow.parentNode.parentNode.style.height = indexNow.parentNode.offsetHeight+'px';
			}
		});
	});
}
if (document.getElementById('woocommerce_layered_nav-2')) {
	var parent = document.getElementById('woocommerce_layered_nav-2');
	var ul1 = document.getElementById('woocommerce_layered_nav-2').getElementsByTagName('ul')[0];
	var el = createMyEl({parent: ul1, nodeName: 'li', classes:'wc-layered-nav-term '});
	el.innerHTML = '<a href="http\://localhost/denwer/nobel/catalog/">Все препараты</a>';
	el = createMyEl({parent: parent, nodeName: 'div', classes:'categoryFilterCont'});
	el.innerHTML = '<div class="categoryFilterInner" id="categoryFilterInner"><div class="firstletter" id="firstletter">По активному веществу</div></div>'
	document.getElementById('categoryFilterInner').appendChild(ul1);
	el.style.height = document.getElementById('firstletter').offsetHeight+'px';
	el.addEventListener('click', function(ev){
		if (el.classList.contains('open')) {
			el.style.height = document.getElementById('firstletter').offsetHeight+'px';
			el.classList.remove('open');
		} else {
			el.style.height = document.getElementById('categoryFilterInner').offsetHeight+'px';
			el.classList.add('open');
		};
	});
};
if (document.getElementById('woocommerce_product_categories-2')) {
	var parent1 = document.getElementById('woocommerce_product_categories-2');
	var ul2 = document.getElementById('woocommerce_product_categories-2').getElementsByTagName('ul')[0];
	var el1 = createMyEl({parent: ul2, nodeName: 'li', classes:'cat-item cat-item-21'});
	el1.innerHTML = '<a href="http\://localhost/denwer/nobel/catalog/">Все препараты</a>';
	el1 = createMyEl({parent: parent1, nodeName: 'div', classes:'categoryFilterCont'});
	el1.innerHTML = '<div class="categoryFilterInner" id="attributeFilterInner"><div class="firstletter" id="firstletterAttr">По категории</div></div>'
	document.getElementById('attributeFilterInner').appendChild(ul2);
	el1.style.height = document.getElementById('firstletterAttr').offsetHeight+'px';
	el1.addEventListener('click', function(ev){
		if (el1.classList.contains('open')) {
			el1.style.height = document.getElementById('firstletterAttr').offsetHeight+'px';
			el1.classList.remove('open');
		} else {
			el1.style.height = document.getElementById('attributeFilterInner').offsetHeight+'px';
			el1.classList.add('open');
		};
	});
	createMyEl({parent:document.getElementById('secondary'), classes: 'clear', nodeName: 'div'});
	createMyEl({parent:document.querySelector('.products'), classes: 'clear', nodeName: 'div'});
};
if (document.getElementById('more')){
	document.getElementById('more').addEventListener('click', function(ev){
		setTimeout(function(){document.getElementById('more').style.display = 'none'},300);
		document.getElementById('afterMore').style.height = document.getElementById('afterMore').firstChild.offsetHeight +'px';
	});
}
function doza(){
	var contDrug = document.getElementById('drugs').querySelectorAll('.drugCont');
	[].forEach.call(contDrug, function(el){
		var dozes = el.querySelectorAll('.doza');
		[].forEach.call(dozes, function(el){
			el.style.width = (100/dozes.length)+'%';
		})
	})
}
if (document.getElementById('drugs') && document.getElementById('drugs').querySelector('.doza')){
	doza();
	if(document.getElementById('drugButton')){
		document.getElementById('drugButton').addEventListener('click', function(){
			setTimeout(doza, 1000);
		});
	};
};
var butMenu = document.querySelector('.menu-toggle');
var menu = document.querySelector('.menu-mainmenu-container');
butMenu.innerHTML = '<i class="fa fa-bars"> <i>';
butMenu.addEventListener('click', function (){
	if (butMenu.firstChild.classList.contains('fa-bars')){
		butMenu.firstChild.classList.remove('fa-bars');
		butMenu.firstChild.classList.add('fa-times');
		menu.style.display = 'block';
		setTimeout(function(){
			menu.classList.add('open-menu');
		},20);
	} else {
		butMenu.firstChild.classList.add('fa-bars');
		butMenu.firstChild.classList.remove('fa-times');
		menu.classList.remove('open-menu');
		setTimeout(function(){
			menu.style.display = 'none';
		},300);
	}
})