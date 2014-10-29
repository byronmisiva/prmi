QoDesk.OfertalaboralWindow = Ext.extend(Ext.app.Module, {
    id: 'ofertalaboral',
    type: 'desktop/ofertalaboral',

    init: function () {
        this.launcher = {
            text: 'Ofertalaboral',
            iconCls: 'ofertalaboral-icon',
            handler: this.createWindow,
            scope: this
        }
    },

    createWindow: function () {
        var desktop = this.app.getDesktop();
        var win = desktop.getWindow('grid-win-ofertalaboral');
        var urlOfertalaboral = "modules/desktop/ofertalaboral/server/";
        var winWidth = desktop.getWinWidth() / 1.2;
        var winHeight = desktop.getWinHeight() / 1.2;

        var textField = new Ext.form.TextField({allowBlank: false});





        function formatDate(value) {
            return value ? value.dateFormat('Y-m-d') : '';
        }

        var formatoFechaMax = new Ext.form.DateField({
            format: 'Y-m-d',
            background: '#0000ff'
        });


        //inicio combo sexo
        this.storeOFSE = new Ext.data.JsonStore({
            root: 'users',
            fields: [ 'id', 'nombre' ],
            autoLoad: true,
            data: { users: [
                { "id": 'I', "nombre":"Indistinto"},
                { "id": 'M', "nombre":"Mujer"},
                { "id": 'H', "nombre":"Hombre"}

            ]}
        });



        var comboOFSE = new Ext.form.ComboBox({
            id: 'comboOFSE',
            store: this.storeOFSE,
            valueField: 'id',
            displayField: 'nombre',
            triggerAction: 'all',
            mode: 'local'
        });

        function ofertalaboralSexo(id) {
            var index = this.storeOFSE.find('id', id);
            if (index > -1) {
                var record = this.storeOFSE.getAt(index);
                return record.get('nombre');
            }
        }

        //fin combo sexo
        //inicio combo activo

        this.storeOFAC = new Ext.data.JsonStore({
            root: 'users',
            fields: [ 'id', 'nombre' ],
            autoLoad: true,
            data: { users: [
                { "id": 1, "nombre":"Si"},
                { "id": 0, "nombre":"No"}

            ]}
        });

        var comboOFAC = new Ext.form.ComboBox({
            id: 'comboOFAC',
            store: this.storeOFAC,
            valueField: 'id',
            displayField: 'nombre',
            triggerAction: 'all',
            mode: 'local'
        });

        function ofertalaboralActivo(id) {
            var index = this.storeOFAC.find('id', id);
            if (index > -1) {
                var record = this.storeOFAC.getAt(index);
                return record.get('nombre');
            }
        }

        //fin combo activo

        //inicio combo cargo
        this.storeFA = new Ext.data.JsonStore({
            id: 'storeFA',
            root: 'data',
            fields: ['id', 'nombre'],
            url: 'modules/common/combos/combos.php?tipo=cargo'
        });
        this.storeFA.load();


        var comboEJFA = new Ext.form.ComboBox({
            id: 'comboEJFA',
            store: this.storeFA,
            valueField: 'id',
            displayField: 'nombre',
            triggerAction: 'all',
            mode: 'local'
        });

        function ofertalaboralCargo(id) {
            var index = this.storeFA.find('id', id);
            if (index > -1) {
                var record = this.storeFA.getAt(index);
                return record.get('nombre');
            }
        }

        //fin combo cargo



        //inicio combo campo
        this.storePrFa = new Ext.data.JsonStore({
            root: 'data',
            fields: ['id', 'nombre'],
            url: 'modules/common/combos/combos.php?tipo=campo'
        });
        this.storePrFa.load();

        var comboPrFa = new Ext.form.ComboBox({
            store: this.storePrFa,
            valueField: 'id',
            displayField: 'nombre',
            triggerAction: 'all',
            mode: 'local'
        });

        function ofertalaboralCampo(id) {
            var index = this.storePrFa.find('id', id);
            if (index > -1) {
                var record = this.storePrFa.getAt(index);
                return record.get('nombre');
            }
        }

        //fin combo campo


        //Ofertalaboral tab
        var proxyOfertalaboral = new Ext.data.HttpProxy({
            api: {
                create: urlOfertalaboral + "crudOfertalaboral.php?operation=insert",
                read: urlOfertalaboral + "crudOfertalaboral.php?operation=select",
                update: urlOfertalaboral + "crudOfertalaboral.php?operation=update",
                destroy: urlOfertalaboral + "crudOfertalaboral.php?operation=delete"
            }
        });

        var readerOfertalaboral = new Ext.data.JsonReader({
            totalProperty: 'total',
            successProperty: 'success',
            messageProperty: 'message',
            idProperty: 'id',
            root: 'data',
            fields: [

                {name: 'cargo', allowBlank: false},
                {name: 'area', allowBlank: false},
                {name: 'tipo_puesto', allowBlank: false},
                {name: 'vacantes', allowBlank: false},
                {name: 'ciudad', allowBlank: false},
                {name: 'salario', allowBlank: false},
                {name: 'descripcion', allowBlank: false},
                {name: 'sexo', allowBlank: false},
                {name: 'creado', type: 'date', dateFormat: 'c', allowBlank: true},
                {name: 'activo', allowBlank: false}
            ]
        });

        var writerOfertalaboral = new Ext.data.JsonWriter({
            encode: true,
            writeAllFields: true
        });

        this.storeOfertalaboral = new Ext.data.Store({
            id: "id",
            proxy: proxyOfertalaboral,
            reader: readerOfertalaboral,
            writer: writerOfertalaboral,
            autoSave: true
        });
        this.storeOfertalaboral.load();


        this.gridOfertalaboral = new Ext.grid.EditorGridPanel({
            height: winHeight - 94,
            store: this.storeOfertalaboral, columns: [
                new Ext.grid.RowNumberer()
                , { header:'Cargo', dataIndex:'cargo', sortable:true, width:50, editor:comboEJFA, renderer:ofertalaboralCargo, scope:this}
                , { header:'Area', dataIndex:'area', sortable:true, width:50, editor:comboPrFa, renderer:ofertalaboralCampo, scope:this}

                , { header: 'Tipo puesto', dataIndex: 'tipo_puesto', sortable: true, width: 50, editor: new Ext.form.TextField({allowBlank: false}) }
                , { header: 'Vacantes', dataIndex: 'vacantes', sortable: true, width: 30, editor: new Ext.form.TextField({allowBlank: false})}
                , { header: 'Ciudad', dataIndex: 'ciudad', sortable: true, width: 30, editor: new Ext.form.TextField({allowBlank: false}) }
                , { header: 'Salario', dataIndex: 'salario', sortable: true, width: 30, editor: new Ext.form.TextField({allowBlank: false }) }
                , { header: 'Descripción', dataIndex: 'descripcion', sortable: true, width: 80, editor: new Ext.form.TextField({allowBlank: false }) }


                , { header:'Sexo', dataIndex:'sexo', sortable:true, width:30, editor:comboOFSE, renderer:ofertalaboralSexo, scope:this}

                , { header:'Activo', dataIndex:'activo', sortable:true, width:15, editor:comboOFAC, renderer:ofertalaboralActivo, scope:this}
                , { header: 'Creado', dataIndex: 'creado', sortable: true, width: 30, renderer: formatDate }

            ],
            viewConfig: {forceFit: true},
            sm: new Ext.grid.RowSelectionModel({singleSelect: false}),
            border: false,
            stripeRows: true
        });
//fin Ofertalaboral tab

//Oferta Laboral Cargo tab
        var proxyOfertalaboralCargo = new Ext.data.HttpProxy({
            api: {
                create: urlOfertalaboral + "crudCargo.php?operation=insert",
                read: urlOfertalaboral + "crudCargo.php?operation=select",
                update: urlOfertalaboral + "crudCargo.php?operation=update",
                destroy: urlOfertalaboral + "crudCargo.php?operation=delete"
            }
        });

        var readerOfertalaboralCargo = new Ext.data.JsonReader({
            totalProperty: 'total',
            successProperty: 'success',
            messageProperty: 'message',
            idProperty: 'id',
            root: 'data',
            fields: [
                {name: 'id'},
                {name: 'nombre'}
            ]
        });

        var writerOfertalaboralCargo = new Ext.data.JsonWriter({
            encode: true,
            writeAllFields: true
        });

        this.storeOfertalaboralCargo = new Ext.data.Store({
            id: "id",
            proxy: proxyOfertalaboralCargo,
            reader: readerOfertalaboralCargo,
            writer: writerOfertalaboralCargo,
            autoSave: true
        });
        this.storeOfertalaboralCargo.load();

        this.gridOfertalaboralCargo = new Ext.grid.EditorGridPanel({
            height: winHeight - 94,
            store: this.storeOfertalaboralCargo, columns: [
                new Ext.grid.RowNumberer()
                , { header: 'Nombre', dataIndex: 'nombre', sortable: true, width: 30, editor: new Ext.form.TextField({allowBlank: false}) }
            ],
            viewConfig: {forceFit: true},
            sm: new Ext.grid.RowSelectionModel({singleSelect: false}),
            border: false,
            stripeRows: true
        });
//Oferta Laboral Cargo tab

//Oferta Laboral Campo
        var proxyOfertalaboralCampoAT = new Ext.data.HttpProxy({
            api: {
                create: urlOfertalaboral + "crudCampo.php?operation=insert",
                read: urlOfertalaboral + "crudCampo.php?operation=select",
                update: urlOfertalaboral + "crudCampo.php?operation=update",
                destroy: urlOfertalaboral + "crudCampo.php?operation=delete"
            }
        });

        var readerOfertalaboralCampoAT = new Ext.data.JsonReader({
            totalProperty: 'total',
            successProperty: 'success',
            messageProperty: 'message',
            idProperty: 'id',
            root: 'data',
            fields: [
                {name: 'id'},
                {name: 'nombre'}
            ]
        });

        var writerOfertalaboralCampoAT = new Ext.data.JsonWriter({
            encode: true,
            writeAllFields: true
        });

        this.storeOfertalaboralCampoAT = new Ext.data.Store({
            id: "id",
            proxy: proxyOfertalaboralCampoAT,
            reader: readerOfertalaboralCampoAT,
            writer: writerOfertalaboralCampoAT,
            autoSave: true

        });
        this.storeOfertalaboralCampoAT.load();

        this.gridOfertalaboralCampoAT = new Ext.grid.EditorGridPanel({
            height: winHeight - 94,
            store: this.storeOfertalaboralCampoAT, columns: [
                new Ext.grid.RowNumberer()
                , { header: 'Nombre', dataIndex: 'nombre', sortable: true, width: 200, editor: new Ext.form.TextField({allowBlank: false}) }
            ],
            viewConfig: {forceFit: true},
            sm: new Ext.grid.RowSelectionModel({singleSelect: false}),
            border: false,
            stripeRows: true
        });
//fin Oferta Laboral Campo


        var desktop = this.app.getDesktop();
        var win = desktop.getWindow('layout-win');

        if (!win) {
            win = desktop.createWindow({
                id: 'grid-win-ofertalaboral',
                title: 'Trabajos disponibles',
                width: winWidth,
                height: winHeight,
                iconCls: 'ofertalaboral-icon',
                shim: false,
                animCollapse: false,
                constrainHeader: true,
                layout: 'fit',
                items: new Ext.TabPanel({
                    activeTab: 0,
                    border: false,

                    items: [
                        {
                            autoScroll: true,
                            title: 'Oferta Laboral',
                            iconCls: 'ofertalaboral-icon',
                            closable: true,
                            tbar: [
                                {text: 'Nuevo', scope: this, handler: this.addofertalaboral, iconCls: 'save-icon'},
                                '-',
                                {text: "Eliminar", scope: this, handler: this.deleteofertalaboral, iconCls: 'delete-icon'}
                                ,
                                '-',
                                {
                                    iconCls: 'demo-grid-add',
                                    handler: this.requestGridData,
                                    scope: this,
                                    text: 'Recargar Datos',
                                    tooltip: 'Recargar datos en la grilla'
                                }
                            ],
                            items: this.gridOfertalaboral
                        },
                        {
                            autoScroll: true,
                            title: 'Cargo',
                            iconCls: 'ofertalaboral-icon',
                            closable: true,
                            tbar: [
                                {text: 'Nuevo', scope: this, handler: this.addofertalaboralCargo, iconCls: 'save-icon'},
                                '-',
                                {text: "Eliminar", scope: this, handler: this.deleteofertalaboralCargo, iconCls: 'delete-icon'}
                                ,
                                '-',
                                {
                                    iconCls: 'demo-grid-add',
                                    handler: this.requestOfertalaboralCargo,
                                    scope: this,
                                    text: 'Recargar Datos',
                                    tooltip: 'Recargar datos en la grilla'
                                }
                            ],
                            items: this.gridOfertalaboralCargo
                        },
                        {
                            autoScroll: true,
                            title: 'Campo',
                            iconCls: 'ofertalaboral-icon',
                            closable: true,
                            items: this.gridOfertalaboralCampoAT,
                            tbar: [
                                {text: 'Nuevo', scope: this, handler: this.addofertalaboralCampo, iconCls: 'save-icon'},
                                '-',
                                {text: "Eliminar", scope: this, handler: this.deleteofertalaboralCampo, iconCls: 'delete-icon'}
                                ,
                                '-',
                                {
                                    iconCls: 'demo-grid-add',
                                    handler: this.requestGridOfertalaboralCampoAT,
                                    scope: this,
                                    text: 'Recargar Datos',
                                    tooltip: 'Recargar datos en la grilla'
                                }
                            ]
                        }
                    ]
                }),
                taskbuttonTooltip: '<b>Tab Window</b><br />A window with tabs'

            });
        }
        win.show();
    }, deleteofertalaboral: function () {
        Ext.Msg.show({
            title: 'Confirmación',
            msg: 'Está seguro de querer borrar?',
            scope: this,
            buttons: Ext.Msg.YESNO,
            fn: function (btn) {
                if (btn == 'yes') {
                    var rows = this.gridOfertalaboral.getSelectionModel().getSelections();
                    if (rows.length === 0) {
                        return false;
                    }
                    this.storeOfertalaboral.remove(rows);
                }
            }
        });
    }, addofertalaboral: function () {


        var ofertalaboral = new this.storeOfertalaboral.recordType({
            cargo: '',
            area: '',
            tipo_puesto: '',
            vacantes: '',
            ciudad: '',
            salario: '',
            descripcion: '',
            sexo: '',
            activo: '1',
            creado: ''

        });
        this.gridOfertalaboral.stopEditing();
        this.storeOfertalaboral.insert(0, ofertalaboral);
        this.gridOfertalaboral.startEditing(0, 1);
    }, deleteofertalaboralCampo: function () {
        Ext.Msg.show({
            title: 'Confirmación',
            msg: 'Está seguro de querer borrar?',
            scope: this,
            buttons: Ext.Msg.YESNO,
            fn: function (btn) {
                if (btn == 'yes') {
                    var rows = this.gridOfertalaboralCampoAT.getSelectionModel().getSelections();
                    if (rows.length === 0) {
                        return false;
                    }
                    this.storeOfertalaboralCampoAT.remove(rows);
                }
            }
        });
    }, addofertalaboralCampo: function () {
        var ofertalaboralcampo = new this.storeOfertalaboralCampoAT.recordType({
            nombre: ''
        });
        this.gridOfertalaboralCampoAT.stopEditing();
        this.storeOfertalaboralCampoAT.insert(0, ofertalaboralcampo);
        this.gridOfertalaboralCampoAT.startEditing(0, 1);
    },

    deleteofertalaboralCargo: function () {
        Ext.Msg.show({
            title: 'Confirmación',
            msg: 'Está seguro de querer borrar?',
            scope: this,
            buttons: Ext.Msg.YESNO,
            fn: function (btn) {
                if (btn == 'yes') {
                    var rows = this.gridOfertalaboralCargo.getSelectionModel().getSelections();
                    if (rows.length === 0) {
                        return false;
                    }
                    this.storeOfertalaboralCargo.remove(rows);
                }
            }
        });
    }, addofertalaboralCargo: function () {
        var ofertalaboralcargo = new this.storeOfertalaboralCargo.recordType({
            nombre: ''
        });
        this.gridOfertalaboralCargo.stopEditing();
        this.storeOfertalaboralCargo.insert(0, ofertalaboralcargo);
        this.gridOfertalaboralCargo.startEditing(0, 1);
    }, requestGridData: function () {
        this.storeOfertalaboral.load();
    }, requestOfertalaboralCargo: function () {
        this.storeOfertalaboralCargo.load();
    }, requestGridOfertalaboralCampoAT: function () {
        this.storeOfertalaboralCampoAT.load();
    }
});