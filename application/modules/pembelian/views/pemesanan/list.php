<div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
              <a href="#" class="btn btn-flat btn-primary btn-sm">Total Record : <?php echo $total_rows ?></a>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('pembelian/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control input-sm" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('pembelian'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-flat btn-primary btn-sm" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
            		<th>Kode Pembelian</th>
            		<th>Keterangan</th>
            		<th>Tanggal Pemesanan</th>
            		<th style="text-align:center;">Action</th>
            </tr><?php
            foreach ($pembelian_data as $pembelian)
            {
                ?>
                <tr>
              			<td width="80px"><?php echo ++$start ?></td>
              			<td><i class="fa fa-book"></i> <?php echo $pembelian->kode_pembelian ?></td>
              			<td><?php echo $pembelian->keterangan ?></td>
              			<td><?php echo $pembelian->created ?></td>
              			<td style="text-align:center" width="200px">
                      <a style="cursor:pointer;" class="btn btn-xs btn-flat btn-success" onclick="read('<?php echo $pembelian->id_pembelian; ?>')"><i class="fa fa-eye"></i> Read</a>
              			</td>
              		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">

      	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="read_view" role="dialog" data-backdrop="static">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Informasi Pembelian Barang</h4>
                    </div>
                    <div class="modal-body">
                        <div id="info_read">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <script type="text/javascript">
            var BASE_URL = "<?php echo base_url('pembelian'); ?>";
            function read(id_pembelian) {
                var id_pembelian = id_pembelian;
                $.ajax({
                    url: BASE_URL + '/read_permintaan_konsumen/' + id_pembelian,
                    type: 'POST',
                    dataType: 'html',
                    cache: false,
                    success: function(result) {
                        $('#read_view').modal('show');
                        $('#info_read').html(result);
                    },
                });
            }
        </script>
