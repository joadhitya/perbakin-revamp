<table class="table datatables table-bordered table-hover table-data" id="table-project">
    <thead>
        <tr class="text-uppercase">
            <th class="w-5p">No</th>
            <th class="w-10p">Kode</th>
            <th>Nama Projek</th>
            <th class="w-15p">Person In Charge</th>
            <th class="w-10p">Kontak</th>
            <th class="w-10p">Status</th>
            <th class="w-20p">Tanggal Projek</th>
            <th class="w-5p">Action</th>

        </tr>
    </thead>
    <tbody>
        @forelse ($data as $key => $item)
            <tr>
                <td class="w-5p">{{ $key + 1 }}</td>
                <td class="w-10p">{{ $item->project_code }}</td>
                <td>{{ $item->project_name }}</td>
                <td class="w-15p">{{ $item->project_pic }}</td>
                <td class="w-10p">{{ $item->project_contact }}</td>
                <td class="w-10p">{{ $item->project_status }}</td>
                <td class="w-20p">
                    {{ date_format(date_create($item->project_date_start), 'd M Y') }} - {{ date_format(date_create($item->project_date_end), 'd M Y') }}
                </td>
                <td class="w-5p">
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn p5x btn-sm btn-outline-warning"
                            onclick="openModal('project','edit', {{ $item->id }})"><span
                                class="fe fe-edit"></span></button>
                        <button type="button" class="btn p5x btn-sm btn-outline-danger"
                            onclick="manageData('delete',{{ $item->id }}, '{{ $item->project_name }}')"><span
                                class="fe fe-trash"></span></button>
                    </div>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
