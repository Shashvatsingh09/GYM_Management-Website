<table border="1">  
          <tbody>  
           <tr>  
            <td>Name</td>  
            <td>Age</td>
            <td>Height</td>  
            <td>Weight</td>  
            <td>Password</td>  
            <td>Membership</td>  
            <td>email</td>
            <td>address</td>  
            <td>city</td>  
            <td>state</td>  
            <td>zip</td>      
            <td>cname</td>  
            <td>ccnumb</td>
            <td>expmonth</td>  
            <td>exp year</td>
            <td>cvv</td>  
            <td>date joined</td>  
          </tr>  
          <?php  
          foreach($o->result() as $column)  
          {  
          ?><tr>  
            <td><?php echo $column->name;?></td>  
            <td><?php echo $column->age;?></td>
            <td><?php echo $column->hgt;?></td>  
            <td><?php echo $column->wgt;?></td> 
            <td><?php echo $column->psw;?></td>  
            <td><?php echo $column->membership;?></td> 
            <td><?php echo $column->email;?></td>  
            <td><?php echo $column->adr;?></td> 
            <td><?php echo $column->city;?></td>  
            <td><?php echo $column->state;?></td> 
            <td><?php echo $column->zip;?></td>  
            <td><?php echo $column->cname;?></td>   
            <td><?php echo $column->ccnumb;?></td>  
            <td><?php echo $column->expmonth;?></td> 
            <td><?php echo $column->expyear;?></td>  
            <td><?php echo $column->cvv;?></td> 
            <td><?php echo $column->date;?></td>  
          </tr>  
        <?php }  
        ?>  
      </tbody>  
    </table> 