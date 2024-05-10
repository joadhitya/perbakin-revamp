<table class="table datatables table-bordered table-hover table-data" id="table-material">
    <thead>
        <tr class="text-uppercase">
            <th class="w-5p">No</th>
            <th class="w-12p">Kode</th>
            <th class="w-15p">Kategori</th>
            <th class="w-15p">Sub Kategori</th>
            <th>Material</th>
            <th class="w-10p">Unit</th>
            <th class="w-15p">Harga</th>
            <th class="w-5p">Action</th>

        </tr>
    </thead>
    <tbody>
        @forelse ($data as $key => $item)
            <tr>
                <td class="w-5p">{{ $key + 1 }}</td>
                <td class="w-12p">{{ $item->material_code }}</td>
                <td class="w-15p">{{ $item->category_material_name }}</td>
                <td class="w-15p">{{ $item->sub_category_material_name }}</td>
                <td>{{ $item->material_name }}</td>
                <td class="w-10p">{{ $item->unit_material_name }}</td>
                <td class="w-15p">{{ number_format($item->material_price) }}</td>
                <td class="w-5p">
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn p5x btn-sm btn-outline-warning"
                            onclick="openModal('material','edit', {{ $item->id }})"><span
                                class="fe fe-edit"></span></button>
                        <button type="button" class="btn p5x btn-sm btn-outline-danger"
                            onclick="manageData('delete',{{ $item->id }}, '{{ $item->material_name }}')"><span
                                class="fe fe-trash"></span></button>
                    </div>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
