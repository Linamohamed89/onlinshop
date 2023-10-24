<?php 
include('conn.php');


if(isset($_POST['update'])){
    $ID=$_POST['id'];
    $Name=$_POST['name'];
    $Price=$_POST['price'];
    $Imge=$_FILES['imge'];//file
    $Imge_location=$_FILES['imge']['tmp_name'];//file
    $Imge_name    =$_FILES['imge']['name'];
    $Imge_up ="images/".$Imge_name; //save upload img in images.
    //أدخل الى (أسم الجدول في myadmine) في الحقول التاليه (name،price،img)القيم التاليه ('$Price'،'$img_up'،'$Name$');
    $update ="UPDATE prod SET name='$Name' ,price='$Price',imge=' $Imge_up' WHERE id=$ID";
    //الأتصال وأدخال البيانات
    mysqli_query($conn, $update);
//الجمله الشرطيه .. عند رفع الملفات في المجلد (images)باسم ($img_name)قم بتنفيذ التالي
    if(move_uploaded_file($Imge_location , 'images/'.$Imge_name)){
            echo "<script>alert('The image has been updated successfully')</script>"; //اطبع تنبيه تم رفع الصوره بنجاح (js code)
   
    }else{
        echo "<script>alert('There was a problem, the images were not updateed')</script>"; //اطبع تنبيه تم رفع الصوره بنجاح (js code)
    }

    header('location:index.php');//بعد رفع المنتج اذهب الى الصفحه التاليه 
}




?>