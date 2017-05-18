<?php $res6 = mysqli_query($link,"select sum(Hrs_Worked) as th1 from Employee,Works_on where  Works_on.Emp_ID = Employee.Emp_ID  and Works_on.Project_ID='01'")
		or die("Failed to query database".mysqli_error());
		$row6 = mysqli_fetch_assoc($res6);
		$th1 = $row6['th1'];
$res5 = mysqli_query($link,"select Duration*Charge_Per_Hour as T1 from Project,Request where Project.Pro_Id=Request.Project_ID  and Project.Pro_ID='01'")
		or die("Failed to query database".mysqli_error());
		$row5 = mysqli_fetch_assoc($res5);
		$salary1= $row5['T1'];
		
		?>