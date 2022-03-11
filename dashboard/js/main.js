(function ($) {
	"use strict";

	/*----------------------------
	 jQuery MeanMenu
	------------------------------ */
	jQuery('nav#dropdown').meanmenu();
	/*----------------------------
	 jQuery myTab
	------------------------------ */
	$('#myTab a').on('click', function (e) {
		e.preventDefault()
		$(this).tab('show')
	});
	$('#myTab3 a').on('click', function (e) {
		e.preventDefault()
		$(this).tab('show')
	});
	$('#myTab4 a').on('click', function (e) {
		e.preventDefault()
		$(this).tab('show')
	});
	$('#myTabedu1 a').on('click', function (e) {
		e.preventDefault()
		$(this).tab('show')
	});

	$('#single-product-tab a').on('click', function (e) {
		e.preventDefault()
		$(this).tab('show')
	});

	$('[data-toggle="tooltip"]').tooltip();

	$('#sidebarCollapse').on('click', function () {
		$('#sidebar').toggleClass('active');
	});
	// Collapse ibox function
	$('#sidebar ul li').on('click', function () {
		var button = $(this).find('i.fa.indicator-mn');
		button.toggleClass('fa-plus').toggleClass('fa-minus');

	});
	/*-----------------------------
		Menu Stick
	---------------------------------*/
	$(".sicker-menu").sticky({ topSpacing: 0 });

	$('#sidebarCollapse').on('click', function () {
		$("body").toggleClass("mini-navbar");
		SmoothlyMenu();
	});
	$(document).on('click', '.header-right-menu .dropdown-menu', function (e) {
		e.stopPropagation();
	});
	/*----------------------------
	 wow js active
	------------------------------ */
	new WOW().init();
	/*----------------------------
	 owl active
	------------------------------ */
	$("#owl-demo").owlCarousel({
		autoPlay: false,
		slideSpeed: 2000,
		pagination: false,
		navigation: true,
		items: 4,
		/* transitionStyle : "fade", */    /* [This code for animation ] */
		navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		itemsDesktop: [1199, 4],
		itemsDesktopSmall: [980, 3],
		itemsTablet: [768, 2],
		itemsMobile: [479, 1],
	});
	/*----------------------------
	 price-slider active
	------------------------------ */
	$("#slider-range").slider({
		range: true,
		min: 40,
		max: 600,
		values: [60, 570],
		slide: function (event, ui) {
			$("#amount").val("£" + ui.values[0] + " - £" + ui.values[1]);
		}
	});
	$("#amount").val("£" + $("#slider-range").slider("values", 0) +
		" - £" + $("#slider-range").slider("values", 1));
	/*--------------------------
	 scrollUp
	---------------------------- */
	$.scrollUp({
		scrollText: '<i class="fa fa-angle-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900,
		animation: 'fade'
	});

})(jQuery);

function formatarData(data) {
	data = data.split(' '); data = data[0];
	data = data.split('-'); data = data[2] + '/' + data[1] + '/' + data[0];
	return data;
}

function groupBy(objectArray, property) {
	return objectArray.reduce(function (acc, obj) {
		var key = obj[property];
		if (!acc[key]) {
			acc[key] = [];
		}
		acc[key].push(obj);
		return acc;
	}, {});
}

function groupByCarrinho(objectArray, property) {
	return objectArray.reduce(function (acc, obj) {
		var key = obj[property];
		if (!acc[key]) {
			acc[key] = [0];
		}
		acc[key] = Number(acc[key]) + Number(obj.total);
		return acc;
	}, {});
}


function formatar_para_moeda(valor) {
	return parseFloat(valor).toLocaleString('pt-BR', { minimumFractionDigits: 2, style: 'currency', currency: 'BRL' })
}


function modal_spinner() {

	let timerInterval
	Swal.fire({
		title: 'Carregando os dados!',
		html: 'Quando concluir eu irei fechar!',
		timer: 20000,
		timerProgressBar: true,
		showCloseButton: false,
		showConfirmButton: false,
		showCancelButton: false,
		focusConfirm: false,
		didOpen: () => {
			Swal.showLoading();

		},
	}).then((result) => {
		/* Read more about handling dismissals below */
		if (result.dismiss === Swal.DismissReason.timer) {
			console.log('I was closed by the timer')
		}
	})
}

function fechar_modal_spinner() {
	Swal.close();
}

function formatarData(data) {
	data = data.split(' ');
	data = data[0];
	data = data.split('-');
	data = data[2] + '/' + data[1] + '/' + data[0];
	return data;
}