QoDesk.HistoriaWindow = Ext.extend(Ext.app.Module, {
    id: 'historia',
    type: 'desktop/historia',

    init: function () {
        this.launcher = {
            text: 'Historia',
            iconCls: 'historia-icon',
            handler: this.createWindow,
            scope: this
        }
    },

    createWindow: function () {
        var desktop = this.app.getDesktop();
        var win = desktop.getWindow('grid-win-historia');

        var urlHistoria = "modules/desktop/historia/server/";


        var pathimagenes = "../../../../../../imagenes/nosotros/";
        var urlver = "imagenes/nosotros/";


        //inicio combo HIIMG
        this.storeHIIMG = new Ext.data.JsonStore({
            id: 'storeHIIMG',
            root: 'data',
            fields: ['id', 'nombre'],
            url: urlHistoria + "crudHistoria.php?operation=itemsHistoria&path=" + pathimagenes + "&urlver=" + urlver
        });
        this.storeHIIMG.load();


        var comboHIIMG = new Ext.form.ComboBox({
            id: 'comboHIIMG',
            store: this.storeHIIMG,
            valueField: 'id',
            displayField: 'nombre',
            triggerAction: 'all',
            mode: 'local'
        });

        function historiaImagenes(id) {
            var index = this.storeHIIMG.find('id', id);
            if (index > -1) {
                var record = this.storeHIIMG.getAt(index);
                return record.get('nombre');
            }
        }

        //fin combo HIIMG


        //inicio combo activo

        this.storeHIAC = new Ext.data.JsonStore({
            root: 'users',
            fields: [ 'id', 'nombre' ],
            autoLoad: true,
            data: { users: [
                { "id": 1, "nombre": "Si"},
                { "id": 0, "nombre": "No"}

            ]}
        });

        var comboHIAC = new Ext.form.ComboBox({
            id: 'comboHIAC',
            store: this.storeHIAC,
            valueField: 'id',
            displayField: 'nombre',
            triggerAction: 'all',
            mode: 'local'
        });

        function historiaActivo(id) {
            var index = this.storeHIAC.find('id', id);
            if (index > -1) {
                var record = this.storeHIAC.getAt(index);
                return record.get('nombre');
            }
        }

        //fin combo activo




        var proxyHistoria = new Ext.data.HttpProxy({
            api: {
                create: urlHistoria + "crudHistoria.php?operation=insert",
                read: urlHistoria + "crudHistoria.php?operation=select",
                update: urlHistoria + "crudHistoria.php?operation=update",
                destroy: urlHistoria + "crudHistoria.php?operation=delete"
            }
        });

        var readerHistoria = new Ext.data.JsonReader({
            totalProperty: 'total',
            successProperty: 'success',
            messageProperty: 'message',
            idProperty: 'id',
            root: 'data',
            fields: [
                {name: 'nombre', allowBlank: false},
                {name: 'titulo', allowBlank: false},
                {name: 'imagen', allowBlank: false},
                {name: 'orden', allowBlank: false},
                {name: 'activo', allowBlank: false}
            ]
        });

        var writerHistoria = new Ext.data.JsonWriter({
            encode: true,
            writeAllFields: true
        });

        this.storeRp = new Ext.data.Store({
            id: "id",
            proxy: proxyHistoria,
            reader: readerHistoria,
            writer: writerHistoria,
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
                { header: 'Titulo', dataIndex: 'titulo', sortable: true, width: 160, editor: new Ext.form.TextField({allowBlank: false})},

                { header: 'Imagen', dataIndex: 'imagen', sortable: true, width: 100, editor: comboHIIMG, renderer: historiaImagenes, scope: this},
                { header: 'Orden', dataIndex: 'orden', sortable: true, width: 12, editor: new Ext.form.TextField({allowBlank: false})},

                { header: 'Activo', dataIndex: 'activo', sortable: true, width: 20, editor: comboHIAC, renderer: historiaActivo, scope: this}

            ],
            viewConfig: {forceFit: true},
            sm: new Ext.grid.RowSelectionModel({singleSelect: false}),
            border: false,
            stripeRows: true
        });
        var desktop = this.app.getDesktop();
        var win = desktop.getWindow('layout-win');

        if (!win) {
            var winWidth = desktop.getWinWidth() / 1.2;
            var winHeight = desktop.getWinHeight() / 1.2;
            win = desktop.createWindow({
                id: 'grid-win-historia',
                title: 'Historia',
                width: winWidth,
                height: winHeight,
                iconCls: 'historia-icon',
                shim: false,
                animCollapse: false,
                constrainHeader: true,
                layout: 'fit',
                tbar: [
                    {text: 'Nuevo', scope: this, handler: this.addhistoria, iconCls: 'save-icon'},
                    '-',
                    {text: "Eliminar", scope: this, handler: this.deletehistoria, iconCls: 'delete-icon'}
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

                        id: "fphi",
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
                                if (Ext.getCmp('fphi').getForm().isValid()) {
                                    Ext.getCmp('fphi').getForm().submit({
                                        url: urlHistoria + 'file-upload.php',
                                        waitMsg: 'Subiendo Imagen...',
                                        success: function (fphi, o) {
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
    }, deletehistoria: function () {
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
    }, addhistoria: function () {
        var historia = new this.storeRp.recordType({
            publicar: 'NO'

        });
        this.gridRp.stopEditing();
        this.storeRp.insert(0, historia);
        this.gridRp.startEditing(0, 1);
    }, requestGridData: function () {
        this.storeHIIMG.load();
        this.storeRp.load();

    }

});
