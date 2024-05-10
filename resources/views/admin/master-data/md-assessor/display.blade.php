<table class="table datatables table-bordered table-hover table-data" id="table-md-assessor">
    <thead>
        <tr class="text-uppercase">
            <th class="w-5p">No</th>
            <th>Kategori</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th class="w-5p">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $key => $item)
            <tr>
                <td class="w-5p">{{ $key + 1 }}</td>
                <td>{!! $item->category . ($item->subCategory ? '<br>' . $item->subCategory : '') !!}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td class="w-5p">
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn p5x btn-sm btn-outline-warning"
                            onclick="openModal('md-assessor','edit', {{ $item->id }})"><span
                                class="fe fe-edit"></span></button>
                        <button type="button" class="btn p5x btn-sm btn-outline-danger"
                            onclick="manageData('delete',{{ $item->id }}, '{{ $item->name }}')"><span
                                class="fe fe-trash"></span></button>
                    </div>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
