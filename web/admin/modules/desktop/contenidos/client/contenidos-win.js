QoDesk.ContenidosWindow = Ext.extend(Ext.app.Module, {
    id: 'contenidos',
    type: 'desktop/contenidos',

    init: function () {
        this.launcher = {
            text: 'Contenidos',
            iconCls: 'contenidos-icon',
            handler: this.createWindow,
            scope: this
        }
    },

    createWindow: function () {
        var desktop = this.app.getDesktop();
        var win = desktop.getWindow('grid-win-contenidos');

        var urlContenidos = "modules/desktop/contenidos/server/";




        var proxyContenidos = new Ext.data.HttpProxy({
            api: {
                create: urlContenidos + "crudContenidos.php?operation=insert",
                read: urlContenidos + "crudContenidos.php?operation=select",
                update: urlContenidos + "crudContenidos.php?operation=update",
                destroy: urlContenidos + "crudContenidos.php?operation=delete"
            }
        });

        var readerContenidos = new Ext.data.JsonReader({
            totalProperty: 'total',
            successProperty: 'success',
            messageProperty: 'message',
            idProperty: 'id',
            root: 'data',
            fields: [
                {name: 'nombre', allowBlank: false},
                {name: 'titulo', allowBlank: false},
                {name: 'contenido', allowBlank: true},
                {name: 'imagen', allowBlank: true},
                {name: 'seccion', allowBlank: false}
            ]
        });

        var writerContenidos = new Ext.data.JsonWriter({
            encode: true,
            writeAllFields: true
        });


        this.storeConte = new Ext.data.Store({
            id: "id",
            proxy: proxyContenidos,
            reader: readerContenidos,
            writer: writerContenidos,
            autoSave: true
        });
        this.storeConte.load();
        storeConte= this.storeConte;
        

        var textField = new Ext.form.TextField({allowBlank: false});

        function formatDate(value) {
            return value ? value.dateFormat('Y-m-d') : '';
        }

        var formatoFechaMax = new Ext.form.DateField({
            format: 'Y-m-d'
        });

        


        this.gridConte = new Ext.grid.EditorGridPanel({
            minHeight:300,
            height:300,
            store: this.storeConte, columns: [
                new Ext.grid.RowNumberer(),
                { header: 'Nombre', dataIndex: 'nombre', sortable: true, width: 50, editor: new Ext.form.TextField({allowBlank: false})},
                { header: 'Título', dataIndex: 'titulo', sortable: true, width: 50, editor: new Ext.form.TextField({allowBlank: false})},
                { header: 'Contenido', dataIndex: 'contenido', sortable: true, width: 50, editor: new Ext.form.TextField({allowBlank: false})},
                { header: 'Imagen', dataIndex: 'imagen', sortable: true, width: 50, editor: new Ext.form.TextField({allowBlank: false})},
                { header: 'Seccion', dataIndex: 'seccion', sortable: true, width: 50, editor: new Ext.form.TextField({allowBlank: false})}
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

            this.formCONTE = new Ext.FormPanel({
                id:'formCONTE',

                items:[
                    {
                        collapsible:true,
                        id:'formcabeceratienda',
                        collapsedTitle:true,
                        titleCollapse:true,
                        split:true,
                        flex:1,
                        height:'auto',
                        autoScroll:true,
                        title:'Listado Tiendas',
                        layout:'column',
                        items:this.gridConte
                    },
                    {
                        collapsible:true,
                        collapsedTitle:true,
                        titleCollapse:true,
                        split:true,
                        flex: 2,
                        height:'auto',
                        autoScroll:true,
                        labelAlign:'left',
                        title:'Detalle Tienda',
                        bodyStyle:'padding:0; background: #DFE8F6',
                        layout:'column',
                        tbar:[
                            {text:'Grabar', scope:this, handler:this.grabarContenido, iconCls:'save-icon', disabled:true, id:'tb_grabarContenido' }
                        ],
                        items:[
                            {
                                frame:true,
                                columnWidth:1,
                                layout:'form',
                                id: 'formTienda',
                                items:[

                                    { xtype:'textfield', fieldLabel:'Nombre', name:'nombre', anchor:'95%', readOnly:false },
                                    { xtype:'htmleditor', fieldLabel:'Contenido', name:'contenido', anchor:'95%', readOnly:false, height:'auto' },
                                    { xtype:'textfield', fieldLabel:'Id', name:'id', anchor:'95%', readOnly:true, hide:'true' }
                                ]
                            }
                        ]

                    }
                ]
            });

            win = desktop.createWindow({
                id: 'grid-win-contenidos',
                title: 'Contenidos',
                width: winWidth,
                height: winHeight,
                iconCls: 'contenidos-icon',
                shim: false,
                animCollapse: false,
                constrainHeader: true,
                layout: 'fit',
                tbar: [
                    {
                        iconCls: 'demo-grid-add',
                        handler: this.requestGridData,
                        scope: this,
                        text: 'Recargar Datos',
                        tooltip: 'Recargar datos en la grilla'
                    }
                ],
                items: this.formCONTE
            });
        }
        win.show();

        //al dar click en un fila se actualiza el detalle
        function cargaDetalleConte (tienda,forma){
            forma.getForm().load({
                url:'modules/desktop/contenidos/server/crudContenidos.php?operation=selectForm',
                params:{
                    id:tienda
                }
            });
        };

        this.gridConte.on('rowclick', function (grid, rowIndex) {
            this.record = this.gridConte.getStore().getAt(rowIndex);
            this.idConteRecuperada = this.record.id;

            /*cargar el formulario*/
            cargaDetalleConte (this.idConteRecuperada, this.formCONTE);
            Ext.getCmp('tb_grabarContenido').setDisabled(false);
        }, this);


    }, deletecontenidos: function () {
        Ext.Msg.show({
            title: 'Confirmación',
            msg: 'Está seguro de querer borrar?',
            scope: this,
            buttons: Ext.Msg.YESNO,
            fn: function (btn) {
                if (btn == 'yes') {
                    var rows = this.gridCONTE.getSelectionModel().getSelections();
                    if (rows.length === 0) {
                        return false;
                    }
                    this.storeCONTE.remove(rows);
                }
            }
        });
    }, addcontenidos: function () {
        var contenidos = new this.storeCONTE.recordType({
            titulo: "",
            contenido: "",
            imagen: "",
            nombre: "",
            creacion: ""
        });
        this.gridCONTE.stopEditing();
        this.storeCONTE.insert(0, contenidos);
        this.gridCONTE.startEditing(0, 1);
    }, requestGridData: function () {
        this.storeCONTE.load();

    },grabarContenido:function () {
        Ext.Msg.show({
            title:'Advertencia',
            msg:'Desea Guardar los cambios.<br>¿Desea continuar?',
            scope:this,
            icon:Ext.Msg.WARNING,
            buttons:Ext.Msg.YESNO,
            fn:function (btn) {
                if (btn == 'yes') {

                    var myForm = Ext.getCmp('formCONTE').getForm();
                    myForm.submit({
                        url : 'modules/desktop/contenidos/server/crudContenidos.php?operation=updateForm',
                        method : 'POST',
                        fileUpload : true,
                        submitEmptyText : false,
                        // waitMsg : 'Saving data',
                        success : function(form, action) {
                            storeConte.load();
                        }
                    });
                }
            }
        });
    }

});
