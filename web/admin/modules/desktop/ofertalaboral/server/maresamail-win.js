QoDesk.OfertalaboralWindow = Ext.extend(Ext.app.Module, {
    id:'ofertalaboral',
    type:'desktop/ofertalaboral',

    init:function () {
        this.launcher = {
            text:'Ofertalaboral',
            iconCls:'ofertalaboral-icon',
            handler:this.createWindow,
            scope:this
        }
    },

    createWindow:function () {
        var desktop = this.app.getDesktop();
        var win = desktop.getWindow('grid-win-ofertalaboral');
        var urlOfertalaboral = "modules/desktop/ofertalaboral/server/";
        var winWidth = desktop.getWinWidth() / 1.2;
        var winHeight = desktop.getWinHeight() / 1.2;

        var textField = new Ext.form.TextField({allowBlank:false});

        function mazdaAdministradorURL (value, p, record){
            var myURL = '';
             if(value == 'Respondido'){

                myURL = '<a style="color:green;" href="http://www.mazda.com.ec/formularios2/adminAnswer.php?cat='+ record.data.catid +'&id=' +  record.id + '" target="_blank">Ver Respuesta</a>';
            } else {
                myURL = '<a style="color:red;" href="http://www.mazda.com.ec/formularios2/adminAnswer.php?cat='+ record.data.catid +'&id=' +  record.id + '" target="_blank">Responder</a>';
            }
            return myURL;
        }

        function formatDate(value) {
            return value ? value.dateFormat('Y-m-d') : '';
        }

        var formatoFechaMax = new Ext.form.DateField({
            format:'Y-m-d',
            background:'#0000ff'
        });
//mazda tab
        var proxyOfertalaboral = new Ext.data.HttpProxy({
            api:{
                create:urlOfertalaboral + "crudMazda.php?operation=insert",
                read:urlOfertalaboral + "crudMazda.php?operation=select",
                update:urlOfertalaboral + "crudMazda.php?operation=update",
                destroy:urlOfertalaboral + "crudMazda.php?operation=delete"
            }
        });

        var readerOfertalaboral = new Ext.data.JsonReader({
            totalProperty:'total',
            successProperty:'success',
            messageProperty:'message',
            idProperty:'id',
            root:'data',
            fields:[
                {name:'id'},
                {name:'nombre'},
                {name:'apellido'},
                {name:'email'},
                {name:'copiaemail'},
                {name:'departamento'},
                {name:'campana'},
                {name:'fechaingreso', type:'date', dateFormat:'c'},
                {name:'activo'}
            ]
        });

        var writerOfertalaboral = new Ext.data.JsonWriter({
            encode:true,
            writeAllFields:true
        });

        this.storeOfertalaboral = new Ext.data.Store({
            id:"id",
            proxy:proxyOfertalaboral,
            reader:readerOfertalaboral,
            writer:writerOfertalaboral,
            autoSave:true
        });
        this.storeOfertalaboral.load();

        this.gridOfertalaboral = new Ext.grid.EditorGridPanel({
            height:winHeight - 94,
            store:this.storeOfertalaboral, columns:[
                new Ext.grid.RowNumberer()
                , { header:'Id', dataIndex:'id', sortable:true, width:10  }
                , { header:'Campaña', dataIndex:'campana', sortable:true, width:40, editor:new Ext.form.TextField({allowBlank:false}) }
                , { header:'Departamento/Concesionario', dataIndex:'departamento', sortable:true, width:60, editor:new Ext.form.TextField({allowBlank:false}) }
                , { header:'Nombre', dataIndex:'nombre', sortable:true, width:30, editor:new Ext.form.TextField({allowBlank:false}) }
                , { header:'Apellido', dataIndex:'apellido', sortable:true, width:30, editor:new Ext.form.TextField({allowBlank:false})}
                , { header:'Email', dataIndex:'email', sortable:true, width:50, editor:new Ext.form.TextField({allowBlank:false, vtype:'email'}) }
                , { header:'Copia Email (separado por comas)', dataIndex:'copiaemail', sortable:true, width:80, editor:new Ext.form.TextField({allowBlank:false }) }
                , { header:'Fecha', dataIndex:'fechaingreso', sortable:true, width:30, renderer:formatDate, editor:formatoFechaMax}
                , { header:'Activo', dataIndex:'activo', sortable:true, width:15, editor:new Ext.form.TextField({allowBlank:false})
                }
            ],
            viewConfig:{forceFit:true},
            sm:new Ext.grid.RowSelectionModel({singleSelect:false}),
            border:false,
            stripeRows:true
        });
//fin mazda tab

//fiat tab
        var proxyMaresaFiatmail = new Ext.data.HttpProxy({
            api:{
                create:urlOfertalaboral + "crudFiat.php?operation=insert",
                read:urlOfertalaboral + "crudFiat.php?operation=select",
                update:urlOfertalaboral + "crudFiat.php?operation=update",
                destroy:urlOfertalaboral + "crudFiat.php?operation=delete"
            }
        });

        var readerMaresaFiatmail = new Ext.data.JsonReader({
            totalProperty:'total',
            successProperty:'success',
            messageProperty:'message',
            idProperty:'id',
            root:'data',
            fields:[
                {name:'id'},
                {name:'nombre'},
                {name:'apellido'},
                {name:'email'},
                {name:'copiaemail'},
                {name:'departamento'},
                {name:'campana'},
                {name:'fechaingreso', type:'date', dateFormat:'c'},
                {name:'activo'}
            ]
        });

        var writerMaresaFiatmail = new Ext.data.JsonWriter({
            encode:true,
            writeAllFields:true
        });

        this.storeMaresaFiatmail = new Ext.data.Store({
            id:"id",
            proxy:proxyMaresaFiatmail,
            reader:readerMaresaFiatmail,
            writer:writerMaresaFiatmail,
            autoSave:true
        });
        this.storeMaresaFiatmail.load();

        this.gridMaresaFiatmail = new Ext.grid.EditorGridPanel({
            height:winHeight - 94,
            store:this.storeMaresaFiatmail, columns:[
                new Ext.grid.RowNumberer()
                , { header:'Id', dataIndex:'id', sortable:true, width:10  }
                , { header:'Campaña', dataIndex:'campana', sortable:true, width:40, editor:new Ext.form.TextField({allowBlank:false}) }
                , { header:'Departamento/Concesionario', dataIndex:'departamento', sortable:true, width:60, editor:new Ext.form.TextField({allowBlank:false}) }
                , { header:'Nombre', dataIndex:'nombre', sortable:true, width:30, editor:new Ext.form.TextField({allowBlank:false}) }
                , { header:'Apellido', dataIndex:'apellido', sortable:true, width:30, editor:new Ext.form.TextField({allowBlank:false})}
                , { header:'Email', dataIndex:'email', sortable:true, width:50, editor:new Ext.form.TextField({allowBlank:false, vtype:'email'}) }
                , { header:'Copia Email (separado por comas)', dataIndex:'copiaemail', sortable:true, width:80, editor:new Ext.form.TextField({allowBlank:false }) }
                , { header:'Fecha', dataIndex:'fechaingreso', sortable:true, width:30, renderer:formatDate, editor:formatoFechaMax}
                , { header:'Activo', dataIndex:'activo', sortable:true, width:15, editor:new Ext.form.TextField({allowBlank:false})
                }
            ],
            viewConfig:{forceFit:true},
            sm:new Ext.grid.RowSelectionModel({singleSelect:false}),
            border:false,
            stripeRows:true
        });
//fin fiat tab

//MaresaMazdaEmailAapoyo Tecnico  tab
        var proxyMaresaMazdaEmailAT = new Ext.data.HttpProxy({
            api:{
                read:urlOfertalaboral + "crudMazda.php?operation=selectMazdaEmailApoyo"
            }
        });

        var readerMaresaMazdaEmailAT = new Ext.data.JsonReader({
            totalProperty:'total',
            successProperty:'success',
            messageProperty:'message',
            idProperty:'id',
            root:'data',
            fields:[
                {name:'id'},
                {name:'nombre'},
                {name:'apellido'},
                {name:'comentario'},
                {name:'estadoMensaje'},
                {name:'fecha' },
                {name:'catid' },
                {name:'catidname' }
            ]
        });

        var writerMaresaMazdaEmailAT = new Ext.data.JsonWriter({
            encode:true,
            writeAllFields:true
        });

        this.storeMaresaMazdaEmailAT = new Ext.data.Store({
            id:"id",
            proxy:proxyMaresaMazdaEmailAT,
            reader:readerMaresaMazdaEmailAT,
            writer:writerMaresaMazdaEmailAT,
            autoSave:true,

            groupField:'catid '
        });
        this.storeMaresaMazdaEmailAT.load();

        this.gridMaresaMazdaEmailAT = new Ext.grid.EditorGridPanel({
            height:winHeight - 94,


            store:this.storeMaresaMazdaEmailAT,

            columns:[
                new Ext.grid.RowNumberer()
                , { header:'Fuente', dataIndex:'catidname', sortable:true, width:40  }
                , { header:'Id', dataIndex:'id', sortable:true, width:10  }
                , { header:'Nombre', dataIndex:'nombre', sortable:true, width:40}
                , { header:'Apellido', dataIndex:'apellido', sortable:true, width:60}
                , { header:'Comentario', dataIndex:'comentario', sortable:true, width:300}
                , { header:'Estado', dataIndex:'estadoMensaje', sortable:true, width:30}
                , { header:'Accion', dataIndex:'estadoMensaje', sortable:true, width:30, renderer:mazdaAdministradorURL}
                , { header:'Fecha', dataIndex:'fecha', sortable:true, width:30 }

            ],

            sm:new Ext.grid.RowSelectionModel({singleSelect:false}),
            border:false,
            stripeRows:true,view: new Ext.grid.GroupingView({
                forceFit:true,
                groupTextTpl: '{text} ({[values.rs.length]} {[values.rs.length > 1 ? "items" : "item"]})'
            })
        });
//fin fiat tab


        var desktop = this.app.getDesktop();
        var win = desktop.getWindow('layout-win');

        if (!win) {
            win = desktop.createWindow({
                id:'grid-win-ofertalaboral',
                title:'Maresa Email',
                width:winWidth,
                height:winHeight,
                iconCls:'ofertalaboral-icon',
                shim:false,
                animCollapse:false,
                constrainHeader:true,
                layout:'fit',
                items:new Ext.TabPanel({
                    activeTab:0,
                    border:false,

                    items:[
                        {
                            autoScroll:true,
                            title:'Mazda Web',
                            iconCls:'mazda-icon',
                            closable:true,
                            tbar:[
                                {text:'Nuevo', scope:this, handler:this.addofertalaboral, iconCls:'save-icon'},
                                '-',
                                {text:"Eliminar", scope:this, handler:this.deleteofertalaboral, iconCls:'delete-icon'}
                                ,
                                '-',
                                {
                                    iconCls:'demo-grid-add',
                                    handler:this.requestGridData,
                                    scope:this,
                                    text:'Recargar Datos',
                                    tooltip:'Recargar datos en la grilla'
                                }
                            ],
                            items:this.gridOfertalaboral
                        },
                        {
                            autoScroll:true,
                            title:'Fiat Web',
                            iconCls:'fiat-icon',
                            closable:true,
                            tbar:[
                                {text:'Nuevo', scope:this, handler:this.addofertalaboral, iconCls:'save-icon'},
                                '-',
                                {text:"Eliminar", scope:this, handler:this.deleteofertalaboral, iconCls:'delete-icon'}
                                ,
                                '-',
                                {
                                    iconCls:'demo-grid-add',
                                    handler:this.requestGridData,
                                    scope:this,
                                    text:'Recargar Datos',
                                    tooltip:'Recargar datos en la grilla'
                                }
                            ],
                            items:this.gridMaresaFiatmail
                        },
                        {
                            autoScroll:true,
                            title:'Mazda 3 Campaña',
                            iconCls:'mazda-icon',
                            closable:true,
                            items:this.gridMaresaMazdaEmailAT,
                            tbar:[
                                {
                                    iconCls:'demo-grid-add',
                                    handler:this.requestGridMaresaMazdaEmailAT,
                                    scope:this,
                                    text:'Recargar Datos',
                                    tooltip:'Recargar datos en la grilla'
                                }
                            ],
                        }
                    ]
                }),
                taskbuttonTooltip:'<b>Tab Window</b><br />A window with tabs'




            });
        }
        win.show();
    }, deleteofertalaboral:function () {
        Ext.Msg.show({
            title:'Confirmación',
            msg:'Está seguro de querer borrar?',
            scope:this,
            buttons:Ext.Msg.YESNO,
            fn:function (btn) {
                if (btn == 'yes') {
                    var rows = this.gridOfertalaboral.getSelectionModel().getSelections();
                    if (rows.length === 0) {
                        return false;
                    }
                    this.storeOfertalaboral.remove(rows);
                }
            }
        });
    }, addofertalaboral:function () {
        var ofertalaboral = new this.storeOfertalaboral.recordType({
            campana:'',
            nombre:'',
            apellido:'',
            email:'',
            copiaemail:'',
            fechaingreso:'',
            departamento:'',
            activo:'0'

        });
        this.gridOfertalaboral.stopEditing();
        this.storeOfertalaboral.insert(0, ofertalaboral);
        this.gridOfertalaboral.startEditing(0, 1);
    }, requestGridData:function () {
        this.storeOfertalaboral.load();

    }, requestGridMaresaMazdaEmailAT:function () {
        this.storeMaresaMazdaEmailAT.load();

    }
});