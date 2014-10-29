QoDesk.ImageadminWindow = Ext.extend(Ext.app.Module, {
    id: 'imageadmin',
    type: 'desktop/imageadmin',

    init: function () {
        this.launcher = {
            text: 'Imageadmin',
            iconCls: 'imageadmin-icon',
            handler: this.createWindow,
            scope: this
        }
    },

    createWindow: function () {
        var desktop = this.app.getDesktop();
        var win = desktop.getWindow('grid-win-imageadmin');

        var urlImageadmin = "modules/desktop/imageadmin/server/";


        var pathimagenes = "../../../../../../imagenes/tiendaslisto/promociones-14-01/";
        var urlver = "imagenes/tiendaslisto/promociones-14-01/";
        var urlmas = "../../";



        var proxyImageadmin = new Ext.data.HttpProxy({
            api: {
                create: urlImageadmin + "crudImageadmin.php?operation=insert",
                read: urlImageadmin + "crudImageadmin.php?operation=itemsImageadmin&path=" + pathimagenes + "&urlver=" + urlver,
                update: urlImageadmin + "crudImageadmin.php?operation=update",
                destroy: urlImageadmin + "crudImageadmin.php?operation=delete"
            }
        });

        var readerImageadmin = new Ext.data.JsonReader({
            totalProperty: 'total',
            successProperty: 'success',
            messageProperty: 'message',
            idProperty: 'id',
            root: 'data',
            fields: [
                {name: 'nombre', allowBlank: false}
            ]
        });

        var writerImageadmin = new Ext.data.JsonWriter({
            encode: true,
            writeAllFields: true
        });

        this.storeRp = new Ext.data.Store({
            id: "id",
            proxy: proxyImageadmin,
            reader: readerImageadmin,
            writer: writerImageadmin,
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
                { header: 'Foto grande', dataIndex: 'nombre', sortable: true, width: 60},
                { header: 'Foto grande', dataIndex: 'nombre',  width: 60,renderer: function(value){ return '<img style="max-height: 100px" src="' + urlmas +  urlver+ value + '" />'; }}
            ],
            viewConfig: {forceFit: true},
            sm: new Ext.grid.RowSelectionModel({singleSelect: false}),
            border: false,
            stripeRows: true
        });
        var desktop = this.app.getDesktop();
        var win = desktop.getWindow('layout-win');

        if (!win) {
            var winWidth = desktop.getWinWidth() / 1.3;
            var winHeight = desktop.getWinHeight() / 1.2;
            win = desktop.createWindow({
                id: 'grid-win-imageadmin',
                title: 'Imageadmin',
                width: winWidth,
                height: winHeight,
                iconCls: 'imageadmin-icon',
                shim: false,
                animCollapse: false,
                constrainHeader: true,
                layout: 'fit',
                tbar: [

                    {text: "Eliminar", scope: this, handler: this.deleteimageadmin, iconCls: 'delete-icon'}
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

                        id: "fp2",
                        items: [
                            {
                                xtype: 'fileuploadfield',
                                id: 'form-file2',
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
                                if (Ext.getCmp('fp2').getForm().isValid()) {
                                    Ext.getCmp('fp2').getForm().submit({
                                        url: urlImageadmin + 'file-upload.php',
                                        waitMsg: 'Subiendo Imagen...',
                                        success: function (fp2, o) {
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
    }, deleteimageadmin: function () {
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
                    this.storeRp.load();

                }
            }
        });
    }, requestGridData: function () {
        this.storeRp.load();
    }

});
