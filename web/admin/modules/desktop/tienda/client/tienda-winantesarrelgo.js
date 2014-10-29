QoDesk.TiendaWindow = Ext.extend(Ext.app.Module, {
    id: 'tienda',
    type: 'desktop/tienda',

    init: function () {
        this.launcher = {
            text: 'Tienda',
            iconCls: 'tienda-icon',
            handler: this.createWindow,
            scope: this
        }
    },

    createWindow: function () {
        var desktop = this.app.getDesktop();
        var win = desktop.getWindow('grid-win-tienda');

        var urlTienda = "modules/desktop/tienda/server/";


        var pathimagenes = "../../../../../../imagenes/tiendaslisto/promociones-14-01/";
        var urlver = "imagenes/tiendaslisto/promociones-14-01/";


        //inicio combo TIIMG
        this.storeTIIMG = new Ext.data.JsonStore({
            id: 'storeTIIMG',
            root: 'data',
            fields: ['id', 'nombre'],
            url: urlTienda + "crudTienda.php?operation=itemsTienda&path=" + pathimagenes + "&urlver=" + urlver
        });
        this.storeTIIMG.load();


        var comboTIIMG = new Ext.form.ComboBox({
            id: 'comboTIIMG',
            store: this.storeTIIMG,
            valueField: 'id',
            displayField: 'nombre',
            triggerAction: 'all',
            mode: 'local'
        });

        function tiendaImagenes(id) {
            var index = this.storeTIIMG.find('id', id);
            if (index > -1) {
                var record = this.storeTIIMG.getAt(index);
                return record.get('nombre');
            }
        }

        //fin combo TIIMG


        //inicio combo activo

        function subir1URL(value, p, record) {
            // return '<div id="fi-button"></div><div id="fi-button-msg" style="display:none;"></div><div class="x-clear"></div>';
        }

        this.storeTIAC = new Ext.data.JsonStore({
            root: 'users',
            fields: [ 'id', 'nombre' ],
            autoLoad: true,
            data: { users: [
                { "id": 1, "nombre": "Si"},
                { "id": 0, "nombre": "No"}

            ]}
        });

        var comboTIAC = new Ext.form.ComboBox({
            id: 'comboTIAC',
            store: this.storeTIAC,
            valueField: 'id',
            displayField: 'nombre',
            triggerAction: 'all',
            mode: 'local'
        });

        function tiendaActivo(id) {
            var index = this.storeTIAC.find('id', id);
            if (index > -1) {
                var record = this.storeTIAC.getAt(index);
                return record.get('nombre');
            }
        }

        //fin combo activo

        //inicio combo activo
        this.storeTITI = new Ext.data.JsonStore({
            root: 'users',
            fields: [ 'id', 'nombre' ],
            autoLoad: true,
            data: { users: [
                { "id": 'promocion', "nombre": "Promoción"},
                { "id": 'menu', "nombre": "Menú"},
                { "id": 'novedades', "nombre": "Novedades"}

            ]}
        });

        var comboTITI = new Ext.form.ComboBox({
            id: 'comboTITI',
            store: this.storeTITI,
            valueField: 'id',
            displayField: 'nombre',
            triggerAction: 'all',
            mode: 'local'
        });

        function tiendaTipo(id) {
            var index = this.storeTITI.find('id', id);
            if (index > -1) {
                var record = this.storeTITI.getAt(index);
                return record.get('nombre');
            }
        }

        //fin combo activo


        var proxyTienda = new Ext.data.HttpProxy({
            api: {
                create: urlTienda + "crudTienda.php?operation=insert",
                read: urlTienda + "crudTienda.php?operation=select",
                update: urlTienda + "crudTienda.php?operation=update",
                destroy: urlTienda + "crudTienda.php?operation=delete"
            }
        });

        var readerTienda = new Ext.data.JsonReader({
            totalProperty: 'total',
            successProperty: 'success',
            messageProperty: 'message',
            idProperty: 'id',
            root: 'data',
            fields: [
                {name: 'nombre', allowBlank: false},
                {name: 'home', allowBlank: false},
                {name: 'tipo', allowBlank: false},
                {name: 'foto_grande', allowBlank: false},
                {name: 'foto_pequena', allowBlank: false},
                {name: 'descripcion', allowBlank: true},
                {name: 'orden', allowBlank: false},
                {name: 'views', allowBlank: true},
                {name: 'clicks', allowBlank: true},
                {name: 'precio'},
                {name: 'fecha_inicio', allowBlank: false, type: 'date', dateFormat: 'c'},
                {name: 'fecha_fin', allowBlank: true, type: 'date', dateFormat: 'c'},
                {name: 'uri', allowBlank: true},
                {name: 'meta_title', allowBlank: true},
                {name: 'meta_keywords', allowBlank: true},
                {name: 'activo', allowBlank: false},
                {name: 'creado', allowBlank: true, type: 'date', dateFormat: 'c'}
            ]
        });

        var writerTienda = new Ext.data.JsonWriter({
            encode: true,
            writeAllFields: true
        });

        this.storeRp = new Ext.data.Store({
            id: "id",
            proxy: proxyTienda,
            reader: readerTienda,
            writer: writerTienda,
            autoSave: true
        });
        this.storeRp.load();

        var textField = new Ext.form.TextField({allowBlank: false});

        function formatDate(value) {
            return value ? value.dateFormat('Y-m-d') : '';
        }

        var formatoFechaMax = new Ext.form.DateField({
            format: 'Y-m-d'
        });

        this.gridRp = new Ext.grid.EditorGridPanel({
            store: this.storeRp, columns: [
                { header: 'Nombre', dataIndex: 'nombre', sortable: true, width: 60, editor: new Ext.form.TextField({allowBlank: false})},
                { header: 'Home', dataIndex: 'home', sortable: true, width: 20, editor: comboTIAC, renderer: tiendaActivo, scope: this},
                { header: 'Tipo', dataIndex: 'tipo', sortable: true, width: 35, editor: comboTITI, renderer: tiendaTipo, scope: this},


                { header: 'Foto grande', dataIndex: 'foto_grande', sortable: true, width: 100, editor: comboTIIMG, renderer: tiendaImagenes, scope: this},
                { header: 'Foto pequeña', dataIndex: 'foto_pequena', sortable: true, width: 100, editor: comboTIIMG, renderer: tiendaImagenes, scope: this},


                { header: 'Descripción', dataIndex: 'descripcion', sortable: true, width: 100, editor: new Ext.form.TextField({allowBlank: false})},
                { header: 'Orden', dataIndex: 'orden', sortable: true, width: 12, editor: new Ext.form.TextField({allowBlank: false})},

                { header: 'Precio', dataIndex: 'precio', sortable: true, width: 30, editor: new Ext.form.TextField({allowBlank: false})},
                { header: 'Fecha inicio', dataIndex: 'fecha_inicio', sortable: true, width: 35, renderer: formatDate, editor: formatoFechaMax},
                { header: 'Fecha fin', dataIndex: 'fecha_fin', sortable: true, width: 35, renderer: formatDate, editor: formatoFechaMax},

                { header: 'Activo', dataIndex: 'activo', sortable: true, width: 20, editor: comboTIAC, renderer: tiendaActivo, scope: this},

                { header: 'Creación', dataIndex: 'creado', sortable: true, width: 35, renderer: formatDate},
                { header: 'Views', dataIndex: 'views', sortable: true, width: 12, editor: new Ext.form.TextField({allowBlank: false})},
                { header: 'Clicks', dataIndex: 'clicks', sortable: true, width: 12, editor: new Ext.form.TextField({allowBlank: false})},
                { header: 'Uri', dataIndex: 'uri', sortable: true, width: 10, editor: new Ext.form.TextField({allowBlank: false})},
                { header: 'Meta title', dataIndex: 'meta_title', sortable: true, width: 10, editor: new Ext.form.TextField({allowBlank: false})},
                { header: 'Meta keywords', dataIndex: 'meta_keywords', sortable: true, width: 10, editor: new Ext.form.TextField({allowBlank: false})}
            ],
            viewConfig: {forceFit: true},
            sm: new Ext.grid.RowSelectionModel({singleSelect: false}),
            border: false,
            stripeRows: true
        });
        var desktop = this.app.getDesktop();
        var win = desktop.getWindow('layout-win');

        if (!win) {
            var winWidth = desktop.getWinWidth() / 1.1;
            var winHeight = desktop.getWinHeight() / 1.1;
            win = desktop.createWindow({
                id: 'grid-win-tienda',
                title: 'Tienda',
                width: winWidth,
                height: winHeight,
                iconCls: 'tienda-icon',
                shim: false,
                animCollapse: false,
                constrainHeader: true,
                layout: 'fit',
                tbar: [
                    {text: 'Nuevo', scope: this, handler: this.addtienda, iconCls: 'save-icon'},
                    '-',
                    {text: "Eliminar", scope: this, handler: this.deletetienda, iconCls: 'delete-icon'}
                    ,
                    '-',
                    {
                        iconCls: 'demo-grid-add',
                        handler: this.requestGridData,
                        scope: this,
                        text: 'Recargar Datos',
                        tooltip: 'Recargar datos en la grilla'
                    },
                    '->',
                    {
                        xtype: 'form',
                        fileUpload: true,
                        width: 400,
                        frame: true,
                        autoHeight: true,
                        defaults: {
                            anchor: '95%',
                            allowBlank: false

                        },

                        id: "fp",
                        items: [
                            {
                                xtype: 'fileuploadfield',
                                id: 'form-file',
                                emptyText: 'Seleccione imagen a subir',
                                fieldLabel: 'Imagen',
                                name: 'photo-path',
                                regex: /^.*.(jpg|JPG|jpeg|JPEG|gif|GIF|png|PNG)$/,
                                regexText:'Solo imagenes ',
                                buttonText: '',
                                buttonCfg: {
                                    iconCls: 'upload-icon'
                                }
                            }
                        ], buttons: [
                        {
                            text: 'Subir',
                            handler: function () {
                                if (Ext.getCmp('fp').getForm().isValid()) {
                                    Ext.getCmp('fp').getForm().submit({
                                        url: urlTienda + 'file-upload.php',
                                        waitMsg: 'Subiendo Imagen...',
                                        success: function (fp, o) {
                                            //this.storeRp.load();

                                        }
                                    });
                                }
                            }
                        }
                    ]
                    }
                ],
                items: this.gridRp
            });
        }
        win.show();
    }, deletetienda: function () {
        Ext.Msg.show({
            title: 'Confirmación',
            msg: 'Está seguro de querer borrar?',
            scope: this,
            buttons: Ext.Msg.YESNO,
            fn: function (btn) {
                if (btn == 'yes') {
                    var rows = this.gridRp.getSelectionModel().getSelections();
                    if (rows.length === 0) {
                        return false;
                    }
                    this.storeRp.remove(rows);
                }
            }
        });
    }, addtienda: function () {
        var tienda = new this.storeRp.recordType({
            nombre : ' ',
            home  : '0',
            tipo : 'menu',
            foto_grande : '',
            foto_pequena  : '',
            descripcion  : '',
            orden  : '0',
            precio : '0',
            fecha_inicio : '',
            fecha_fin  : '',
            activo  : '0',
            creado  : '',
            views  : '0',
            clicks  : '0',
            uri  : '',
            meta_title : '',
            meta_keywords  : ''
        });
        this.gridRp.stopEditing();
        this.storeRp.insert(0, tienda);
        this.gridRp.startEditing(0, 1);
    }, requestGridData: function () {
        this.storeTIIMG.load();
        this.storeRp.load();

    }

});
