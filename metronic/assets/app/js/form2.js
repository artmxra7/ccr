// ajax serverSide form2 Baru
var DatatablesDataSourceAjaxServerForm2Baru = function() {

	var initTable1 = function() {
		var table = $('#table_form_2_baru');

		// begin first table
		table.DataTable({
			searching: false,
			responsive: true,
			searchDelay: 500,
			processing: true,
			serverSide: true,
			ajax: 'inc/api/datatables/demos/server.php',
			columns: [
				{data: 'kode'},
				{data: 'nama'},
				{data: 'email'},
				{data: 'alamat'},
				{data: 'address'},
				{data: 'telepon'},
				{data: 'no_hp'},
				{data: 'status'},
				{data: 'Actions'},
			],
			columnDefs: [
				{
					targets: -1,
					title: 'Actions',
					orderable: false,
					render: function(data, type, full, meta) {
						return `
                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                          <i class="la la-ellipsis-h"></i>
                        </a>`;
					},
				}
			],
		});
	};

	return {

		//main function to initiate the module
		init: function() {
			initTable1();
		},

	};

}();

// ajax serverSide form2 Lanjut
var DatatablesDataSourceAjaxServerForm2Lanjut = function() {

	var initTable1 = function() {
		var table = $('#table_form_2_lanjut');

		// begin first table
		table.DataTable({
			searching: false,
			responsive: true,
			searchDelay: 500,
			processing: true,
			serverSide: true,
			ajax: 'inc/api/datatables/demos/server.php',
			columns: [
				{data: 'kode'},
				{data: 'nama'},
				{data: 'email'},
				{data: 'alamat'},
				{data: 'address'},
				{data: 'telepon'},
				{data: 'no_hp'},
				{data: 'status'},
				{data: 'Actions'},
			],
			columnDefs: [
				{
					targets: -1,
					title: 'Actions',
					orderable: false,
					render: function(data, type, full, meta) {
						return `
                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                          <i class="la la-ellipsis-h"></i>
                        </a>`;
					},
				}
			],
		});
	};

	return {

		//main function to initiate the module
		init: function() {
			initTable1();
		},

	};

}();

// ajax serverSide form1 Lanjut
var DatatablesDataSourceAjaxServerForm2Tolak = function() {

	var initTable1 = function() {
		var table = $('#table_form_2_tolak');

		// begin first table
		table.DataTable({
			searching: false,
			responsive: true,
			searchDelay: 500,
			processing: true,
			serverSide: true,
			ajax: 'inc/api/datatables/demos/server.php',
			columns: [
				{data: 'kode'},
				{data: 'nama'},
				{data: 'email'},
				{data: 'alamat'},
				{data: 'address'},
				{data: 'telepon'},
				{data: 'no_hp'},
				{data: 'status'},
				{data: 'Actions'},
			],
			columnDefs: [
				{
					targets: -1,
					title: 'Actions',
					orderable: false,
					render: function(data, type, full, meta) {
						return `
                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                          <i class="la la-ellipsis-h"></i>
                        </a>`;
					},
				}
			],
		});
	};

	return {

		//main function to initiate the module
		init: function() {
			initTable1();
		},

	};

}();

jQuery(document).ready(function() {
	DatatablesDataSourceAjaxServerForm2Baru.init();
	DatatablesDataSourceAjaxServerForm2Lanjut.init();
	DatatablesDataSourceAjaxServerForm2Tolak.init();
});
