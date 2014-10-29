QoDesk.MapaWindow = Ext.extend(Ext.app.Module, {
    id:'mapa',
    type:'desktop/mapa',

    init:function () {
        this.launcher = {
            text:'Mapa',
            iconCls:'mapa-icon',
            handler:this.createWindow,
            scope:this
        }
    },

    createWindow:function () {
        var desktop = this.app.getDesktop();
        var win = desktop.getWindow('grid-win-mapa');

        var urlMapa = "modules/desktop/mapa/server/";

        //inicio combo tipo Mapa
        this.storeMATI = new Ext.data.JsonStore({
            id: 'storeMATI',
            root: 'data',
            fields: ['id', 'nombre'],
            url: 'modules/common/combos/combos.php?tipo=tipomapa'
        });
        this.storeMATI.load();

        function mapaAdministradorURL(value, p, record) {
            return '<a  href="' + value + '" target="_blank">Ver mapa</a>';
        }

        var comboMATI = new Ext.form.ComboBox({
            id: 'comboMATI',
            store: this.storeMATI,
            valueField: 'id',
            displayField: 'nombre',
            triggerAction: 'all',
            mode: 'local'
        });

        function ofertalaboralMATI(id) {
            var index = this.storeMATI.find('id', id);
            if (index > -1) {
                var record = this.storeMATI.getAt(index);
                return record.get('nombre');
            }
        }

        //fin combo Tipo Mapa

        //inicio combo activo

        this.storeMAAC = new Ext.data.JsonStore({
            root: 'users',
            fields: [ 'id', 'nombre' ],
            autoLoad: true,
            data: { users: [
                { "id": 1, "nombre":"Si"},
                { "id": 0, "nombre":"No"}

            ]}
        });

        var comboMAAC = new Ext.form.ComboBox({
            id: 'comboMAAC',
            store: this.storeMAAC,
            valueField: 'id',
            displayField: 'nombre',
            triggerAction: 'all',
            mode: 'local'
        });

        function mapaActivo(id) {
            var index = this.storeMAAC.find('id', id);
            if (index > -1) {
                var record = this.storeMAAC.getAt(index);
                return record.get('nombre');
            }
        }

        //fin combo activo


        var proxyMapa = new Ext.data.HttpProxy({
            api:{
                create:urlMapa + "crudMapa.php?operation=insert",
                read:urlMapa + "crudMapa.php?operation=select",
                update:urlMapa + "crudMapa.php?operation=update",
                destroy:urlMapa + "crudMapa.php?operation=delete"
            }
        });

        var readerMapa = new Ext.data.JsonReader({
            totalProperty:'total',
            successProperty:'success',
            messageProperty:'message',
            idProperty:'id',
            root:'data',
            fields:[
                {name:'nombre', allowBlank:false},
                {name:'provincia', allowBlank:false},
                {name:'ciudad', allowBlank:false},
                {name:'direccion', allowBlank:false},
                {name:'tipo', allowBlank:false},
                {name:'activo', allowBlank:false},
                {name:'url'},
                {name:'coordenadas'},
                {name:'latitud', allowBlank:false},
                {name:'longitud', allowBlank:false},
                {name:'creado', allowBlank:false,type:'date', dateFormat:'c'},
                {name:'activo'}
            ]
        });

        var writerMapa = new Ext.data.JsonWriter({
            encode:true,
            writeAllFields:true
        });



        this.storeRp = new Ext.data.Store({
            id:"id",
            proxy:proxyMapa,
            reader:readerMapa,
            writer:writerMapa,
            autoSave:true
        });
        this.storeRp.load();

        var textField = new Ext.form.TextField({allowBlank:false});
        function formatDate(value) {
            return value ? value.dateFormat('Y-m-d') : '';
        }

        var formatoFechaMax = new Ext.form.DateField({
            format:'Y-m-d'
        });



        this.gridRp = new Ext.grid.EditorGridPanel({
            store:this.storeRp, columns:[
                new Ext.grid.RowNumberer()


                ,
                { header:'Nombre',dataIndex:'nombre', sortable:true, width:50, editor:new Ext.form.TextField({allowBlank:false})},
                { header:'provincia',dataIndex:'provincia', sortable:true, width:30, editor:new Ext.form.TextField({allowBlank:false})},
                { header:'ciudad',dataIndex:'ciudad', sortable:true, width:30, editor:new Ext.form.TextField({allowBlank:false})},
                { header:'direccion',dataIndex:'direccion', sortable:true, width:50, editor:new Ext.form.TextField({allowBlank:false})},

                { header:'Tipo', dataIndex:'tipo', sortable:true, width:50, editor:comboMATI, renderer:ofertalaboralMATI, scope:this},

                { header:'url',dataIndex:'url', sortable:true, width:40, editor:new Ext.form.TextField({allowBlank:false})},
                { header:'',dataIndex:'url',  width:15, renderer:mapaAdministradorURL},
                { header:'coordenadas',dataIndex:'coordenadas', sortable:true, width:50, editor:new Ext.form.TextField({allowBlank:false})},
                { header:'latitud',dataIndex:'latitud', sortable:true, width:25, editor:new Ext.form.TextField({allowBlank:false})},
                { header:'longitud',dataIndex:'longitud', sortable:true, width:25, editor:new Ext.form.TextField({allowBlank:false})},

                { header:'Activo', dataIndex:'activo', sortable:true, width:15, editor:comboMAAC, renderer:mapaActivo, scope:this},

                { header:'Fecha Creación', dataIndex:'creado', sortable:true, width:24, renderer:formatDate}

            ],
            viewConfig:{forceFit:true},
            sm:new Ext.grid.RowSelectionModel({singleSelect:false}),
            border:false,
            stripeRows:true
        });
        var desktop = this.app.getDesktop();
        var win = desktop.getWindow('layout-win');

        if (!win) {
            var winWidth = desktop.getWinWidth() / 1.1;
            var winHeight = desktop.getWinHeight() / 1.1;


            win = desktop.createWindow({
                id:'grid-win-mapa',
                title:'Mapa',
                width:winWidth,
                height:winHeight,
                iconCls:'mapa-icon',
                shim:false,
                animCollapse:false,
                constrainHeader:true,
                layout:'fit',
                tbar:[
                    {text:'Nuevo', scope:this, handler:this.addmapa, iconCls:'save-icon'},
                    '-',
                    {text:"Eliminar", scope:this, handler:this.deletemapa, iconCls:'delete-icon'}
                    ,'-',
                    {
                        iconCls: 'demo-grid-add',
                        handler: this.requestGridData,
                        scope: this,
                        text: 'Recargar Datos',
                        tooltip: 'Recargar datos en la grilla'
                    }
                ],
                items:this.gridRp
            });
        }
        win.show();
    }, deletemapa:function () {
        Ext.Msg.show({
            title:'Confirmación',
            msg:'Está seguro de querer borrar?',
            scope:this,
            buttons:Ext.Msg.YESNO,
            fn:function (btn) {
                if (btn == 'yes') {
                    var rows = this.gridRp.getSelectionModel().getSelections();
                    if (rows.length === 0) {
                        return false;
                    }
                    this.storeRp.remove(rows);
                }
            }
        });
    }, addmapa:function () {
        var mapa = new this.storeRp.recordType({
            nombre:" " ,
            provincia:" " ,
            ciudad:" " ,
            direccion:" " ,
            tipo:"100" ,
            activo:"0" ,
            url:"" ,
            coordenadas:"" ,
            latitud:"" ,
            longitud:""


        });
        this.gridRp.stopEditing();
        this.storeRp.insert(0, mapa);
        this.gridRp.startEditing(0, 1);
    },requestGridData: function () {
        this.storeRp.load();

    }

});
