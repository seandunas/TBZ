
  <div class="container">
    <div class="jumbotron">  

        <table class="table table-hover">
            <thead>
                <th>SERVICE LIST</th>
            </thead>
            <tbody>
                <?php
                    foreach($services as $service):?>
                    <tr>
                        <td>
                            <?=$service->service_name?>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
      
    </div>
  </div>

        
<!-- THIS PAGE IS WALA LANG DIN ATA   -->   