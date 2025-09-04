
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" integrity="sha512-wJgJNTBBkLit7ymC6vvzM1EcSWeM9mmOu+1USHaRBbHkm6W9EgM0HY27+UtUaprntaYQJF75rc8gjxllKs5OIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>

    
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" integrity="sha512-wJgJNTBBkLit7ymC6vvzM1EcSWeM9mmOu+1USHaRBbHkm6W9EgM0HY27+UtUaprntaYQJF75rc8gjxllKs5OIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 200px;
        height: 100vh;
        padding: 5px;
        background-color:#00A9FF; 
        border-right: 1px solid var(--bs-border-color); 
        overflow-y: auto; 
    }

    .main {
        width: calc(100% - 200px);
        margin-left: 230px; 
        padding: 1rem;
    }

    .home {
        width: 100%; 
        padding: 1rem;
    }

    .navbar {
        position: fixed;
        top: 0;
        width: calc(100% - 200px);
        height: 60px;
        left: 200px;
        padding: 1rem;
        background-color: #00A9FF;
        color: var(--bs-light); 
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 1000;
    }

    .body-content {
        margin-top: 70px; 
        min-height: 85vh;
        background-color: var(--bs-body-bg); 
        padding: 1rem;
    }

    .home-body-content {
        
    }

    .sidebar h3 {
        color: #000000;
        font-weight: 600;
    }

    .sidebar .nav-link {
        border-radius: .375rem;
        margin-bottom: .5rem;
        transition: background-color 0.2s ease;
        color: #000000;
    }

    .sidebar .nav-link:hover {
        background-color: #89CFF3;
        color: var(--bs-light);
    }

    .loginform {
        width: 400px;
        height: 400px;
        padding: 20px;
        margin-top: 200px;
        margin-left: 38%;
        margin-bottom: 200px;
    }

    .loginform h2 {
        text-align: center;
        margin-bottom: 30px;
        font-weight: 600;
        font-size: 24px;
    }

    .bread-crumb-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        border: 1px solid #dee2e6;
        padding: 10px;
    }

    .categorycreateform {
        width: 600px;
        height: 400px;
        items-align: center;
        padding: 20px;
        margin-left: 20%;
        margin-top: 50px;

    
    }

    .product-card {
        width: 18rem;    
        height: 350px;   
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .product-card img {
        height: 200px;  
        object-fit: cover; 
    }

    .Navbar {
        top: 0;
        width: 100%;
        height: 60px;
        padding: 1rem;
        background-color: #00A9FF; 
        display: fixed;
    }

    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 200px;
        height: 100vh;
        padding: 5px;
        background-color:#00A9FF; 
        border-right: 1px solid var(--bs-border-color); 
        overflow-y: auto; 
    }

    .main {
        width: calc(100% - 200px);
        margin-left: 230px; 
        padding: 1rem;
    }

    .home {
        width: 100%; 
        padding: 1rem;
    }

    .navbar {
        position: fixed;
        top: 0;
        width: calc(100% - 200px);
        height: 60px;
        left: 200px;
        padding: 1rem;
        background-color: #00A9FF;
        color: var(--bs-light); 
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 1000;
    }

    .body-content {
        margin-top: 70px; 
        min-height: 85vh;
        background-color: var(--bs-body-bg); 
        padding: 1rem;
    }

    .home-body-content {
        
    }

    .sidebar h3 {
        color: #000000;
        font-weight: 600;
    }

    .sidebar .nav-link {
        border-radius: .375rem;
        margin-bottom: .5rem;
        transition: background-color 0.2s ease;
        color: #000000;
    }

    .sidebar .nav-link:hover {
        background-color: #89CFF3;
        color: var(--bs-light);
    }

    .loginform {
        width: 400px;
        height: 400px;
        padding: 20px;
        margin-top: 200px;
        margin-left: 38%;
        margin-bottom: 200px;
    }

    .loginform h2 {
        text-align: center;
        margin-bottom: 30px;
        font-weight: 600;
        font-size: 24px;
    }

    .bread-crumb-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        border: 1px solid #dee2e6;
        padding: 10px;
    }

    .categorycreateform {
        width: 600px;
        height: 400px;
        items-align: center;
        padding: 20px;
        margin-left: 20%;
        margin-top: 50px;

    
    }

    .product-card {
        width: 18rem;    
        height: 350px;   
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .product-card img {
        height: 200px;  
        object-fit: cover; 
    }

    .Navbar {
        top: 0;
        width: 100%;
        height: 60px;
        padding: 1rem;
        background-color: #00A9FF; 
        display: fixed;
    }
    
</style>
