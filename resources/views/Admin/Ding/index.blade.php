@extends('Admin.public.public')
@section('title','订单列表')
@section('main')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-table">&nbsp;&nbsp;订单列表</i>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
            </font>
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
            <table class="mws-datatable mws-table dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="渲染引擎：激活以对列进行降序排序" style="width: 185px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">ID</font>
                            </font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="浏览器：激活以对列升序进行排序" style="width: 250px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">订单号</font>
                            </font>
                        </th>
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="渲染引擎：激活以对列进行降序排序" style="width: 185px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">用户id</font>
                            </font>
                        </th>
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="渲染引擎：激活以对列进行降序排序" style="width: 185px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">地址id</font>
                            </font>
                        </th>
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="渲染引擎：激活以对列进行降序排序" style="width: 185px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">订单金额</font>
                            </font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS等级：激活以对列升序进行排序" style="width: 120px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">操作</font>
                            </font>
                        </th>
                    </tr>
                </thead>

                <tbody role="alert" aria-live="polite" aria-relevant="all"> 
                @foreach($admindd as $row)
                    <tr class="odd">
                   
                        <td class="  sorting_1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$row->id}}</font>
                            </font>
                        </td>
                        <td class=" ">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$row->order_num}}</font>
                            </font>
                        </td>
                         <td class=" ">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$row->user_id}}</font>
                            </font>
                        </td>
                         <td class=" ">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$row->address_id}}</font>
                            </font>
                        </td>
                         <td class=" ">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$row->total}}</font>
                            </font>
                        </td>
                        <td class="">
                           
                            <a href="/admindd/{{$row->id}}/edit" class="btn btn-success" style="float:left;">查看详情</a>
                            <div style="float:both;"></div>
                        </td>
                        
                    </tr>
                @endforeach
                 
                </tbody>
            </table>
            
        </div>
    </div>
</div>
@endsection