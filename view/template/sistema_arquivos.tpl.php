<a href="<?php echo ASSET.'data.json'?>">Teste</a>

<?php
$dataFile = ASSET.'data.json';
echo ASSET.'data.json';
function loadData()
{
    global $dataFile;
    if (file_exists($dataFile)) {
        $data = file_get_contents($dataFile);
        return json_decode($data, true);
    }
    return [];
}

function saveData($data)
{
    global $dataFile;
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($dataFile, $jsonData);
}

function uploadFile($file, $uploadDir)
{
    $targetFile = $uploadDir . basename($file['name']);
    move_uploaded_file($file['tmp_name'], $targetFile);
    return $targetFile;
}

function addRecord($name, $description, $fileName)
{
    $data = loadData();
    $id = uniqid();
    $data[] = ['id' => $id, 'name' => $name, 'description' => $description, 'file' => $fileName];
    saveData($data);
}

function editRecord($id, $name, $description, $fileName)
{
    $data = loadData();
    foreach ($data as &$record) {
        if ($record['id'] == $id) {
            $record['name'] = $name;
            $record['description'] = $description;
            $record['file'] = $fileName;
            break;
        }
    }
    saveData($data);
}

function deleteRecord($id)
{
    $data = loadData();
    $data = array_filter($data, function ($record) use ($id) {
        return $record['id'] != $id;
    });
    saveData($data);
}

// Handling form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'add') {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $file = $_FILES['file'];
        $uploadDir = ASSET.'uploads/';
        $fileName = uploadFile($file, $uploadDir);
        addRecord($name, $description, $fileName);
    } elseif ($_POST['action'] === 'edit') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];

        // Verifica se um novo arquivo foi enviado
        if ($_FILES['file']['size'] > 0) {
            $file = $_FILES['file'];
            $uploadDir = ASSET.'uploads/';
            $fileName = uploadFile($file, $uploadDir);
        } else {
            // Mantém o nome do arquivo existente se nenhum novo arquivo for enviado
            $fileName = $_POST['existing_file'];
        }

        editRecord($id, $name, $description, $fileName);
    } elseif ($_POST['action'] === 'delete') {
        $id = $_POST['id'];
        deleteRecord($id);
    }
    header('Location: index.php');
    exit;
}

// Display records
$records = loadData();
?>


    <style>
        /* Adiciona algum estilo básico para melhorar a aparência */
        body {
            font-family: Arial, sans-serif;
        }

        h1, h2 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            padding: 10px;
        }

        form {
            display: inline-block;
            margin-right: 10px;
        }

        input[type="text"] {
            padding: 5px;
        }
    </style>
    <script>
        // Função para filtrar os resultados conforme o usuário digita
        function filterResults() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById('searchInput');
            filter = input.value.toUpperCase();
            ul = document.getElementById('recordsList');
            li = ul.getElementsByTagName('li');

            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName('strong')[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = '';
                } else {
                    li[i].style.display = 'none';
                }
            }
        }
    </script>
</head>

<body>
    <h1>CRUD System</h1>

    <!-- Add Record Form -->
    <h2>Add Record</h2>
    <form action="<?= URL ?>arquivos" method="post" enctype="multipart/form-data">
        <input type="hidden" name="action" value="add">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" rows="4" required></textarea>
        <br>
        <label for="file">File:</label>
        <input type="file" name="file" required>
        <br>
        <input type="submit" value="Add Record">
    </form>

    <!-- Display Records with Search -->
    <h2>Records</h2>
    <label for="searchInput">Search:</label>
    <input type="text" id="searchInput" onkeyup="filterResults()" placeholder="Search for names">
    <ul id="recordsList">
        <?php if (!empty($records)) : ?>
            <?php foreach ($records as $record) : ?>
                <li>
                    <strong><?php echo $record['name']; ?></strong>
                    <p><?php echo $record['description']; ?></p>
                    <p>File: <?php echo $record['file']; ?></p>
                    <form action="<?= URL ?>arquivos" method="post">
                        <input type="hidden" name="id" value="<?php echo $record['id']; ?>">
                        <input type="hidden" name="action" value="delete">
                        <input type="submit" value="Delete">
                    </form>
                    <form action="edit.php" method="get">
                        <input type="hidden" name="id" value="<?php echo $record['id']; ?>">
                        <input type="submit" value="Edit">
                    </form>
                </li>
            <?php endforeach; ?>
        <?php else : ?>
            <li>No records found.</li>
        <?php endif; ?>
    </ul>































 <!-- breadcrumb-area -->
<!-- <section id="work" class="pt-120 pb-90">
                <div class="container">                  
					<div class="portfolio ">
                        <div class="row align-items-center mb-50 text-center">                          
                            <div class="col-lg-12">
                                 <div class="my-masonry">
                            <div class="button-group filter-button-group ">
                               <button class="active" data-filter="*">All Gallery</button>
								 <button data-filter=".seo">Kitchen </button>
								<button data-filter=".marketing">Insuranceg</button>	
								<button data-filter=".website">Financial</button>
								
							</div>
                        </div>
                            </div>
                        </div>
                      

                <div class="grid col3" style="position: relative; height: 492.656px;">
                    
				   	<div class="grid-item website" style="position: absolute; left: 0%; top: 0px;">     
                        <div class="box20  p-relative fix">
                        <img src="<?php echo ASSET ?>img/gallery/protfolio-img01.png" alt="protfolio">
                        <div class="box-content">
                            <h3 class="title"><a href="projects-detail.html">Financial</a></h3>
                            
                        </div>
                        <ul class="icon">
                           
                            <li><a href="projects-detail.html"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                           
                    </div>
					<div class="grid-item seo" style="position: absolute; left: 33.3333%; top: 0px;">
                         <div class="box20  p-relative fix">
                        <img src="<?php echo ASSET ?>img/gallery/protfolio-img02.png" alt="protfolio">
                        <div class="box-content">
                            <h3 class="title"><a href="projects-detail.html">Banking</a></h3>
                        </div>
                        <ul class="icon">
                           
                            <li><a href="projects-detail.html"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                    </div>
                     <div class="grid-item marketing" style="position: absolute; left: 66.6667%; top: 0px;">
                           <div class="box20  p-relative fix">
                        <img src="<?php echo ASSET ?>img/gallery/protfolio-img03.png" alt="protfolio">
                        <div class="box-content">
                            <h3 class="title"><a href="projects-detail.html">Insuranceg</a></h3>
                        </div>
                        <ul class="icon">
                           
                            <li><a href="projects-detail.html"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                   
                    </div>
                     	<div class="grid-item website" style="position: absolute; left: 0%; top: 246px;">     
                        <div class="box20  p-relative fix">
                        <img src="<?php echo ASSET ?>img/gallery/protfolio-img06.png" alt="protfolio">
                        <div class="box-content">
                            <h3 class="title"><a href="projects-detail.html">Financial</a></h3>
                        </div>
                        <ul class="icon">
                           
                            <li><a href="projects-detail.html"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                           
                    </div>
					<div class="grid-item seo" style="position: absolute; left: 33.3333%; top: 246px;">
                         <div class="box20  p-relative fix">
                        <img src="<?php echo ASSET ?>img/gallery/protfolio-img05.png" alt="protfolio">
                        <div class="box-content">
                            <h3 class="title"><a href="projects-detail.html">Banking</a></h3>
                        </div>
                        <ul class="icon">
                           
                            <li><a href="projects-detail.html"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                    </div>
                     <div class="grid-item marketing" style="position: absolute; left: 66.6667%; top: 246px;">
                           <div class="box20  p-relative fix">
                        <img src="<?php echo ASSET ?>img/gallery/protfolio-img04.png" alt="protfolio">
                        <div class="box-content">
                            <h3 class="title"><a href="projects-detail.html">Insuranceg</a></h3>
                        </div>
                        <ul class="icon">
                           
                            <li><a href="projects-detail.html"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                   
                    </div>
                  
                                     
                    </div>

        </div>
                </div>
            </section> -->