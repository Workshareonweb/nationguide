			<!-- Widget -->
                <div class="widget">
                    <div class="widget-body overflow-x">
                    
                    
                    
                    
                    
                        <!-- Table -->
                      
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Users Account</h3>
                        
                                    <table class="table table-hover table-striped" id="bootstrap-table">
                                        <thead>
                                        <tr>
                                            <th>Nº</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Station at</th>
                                            <th>User Contact</th>
                                            <th>Shift of Work</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
									  		@$a = 0;
									  		foreach($this->userList as $key => $value) { 
											@$a++;		
										?>
                                        <tr>
                                            <td><?php echo @$a; ?></td>
                                            <td><?php echo $value['name']; ?></td>
                                            <td><?php echo $value['username']; ?></td>
                                            <td><?php echo $value['sname']; ?></td>
                                            <td><?php echo $value['Phone']; ?></td>
                                            <td><?php echo "<b>". $value['shiftname']."</b> -> ".$value['time']; ?></td>
                                            <td>
                                            <button class="btn btn-inverse btn-stroke">Edit</button>
                                			<button class="btn btn-danger btn-stroke">Delete</button>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        <!-- // Table END -->
                    </div>
                </div>
                <!-- // Widget END -->