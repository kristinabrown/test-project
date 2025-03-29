<body class="bg-gray-100 p-6">

    <h1 class="text-2xl font-bold text-gray-800 mb-4 text-center">PHP Test Application</h1>
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
      <table class="min-w-full">
				<thead class="bg-gray-800 text-white">
					<tr>
						<th class="py-3 px-4 text-left">Name</th>
						<th class="py-3 px-4 text-left">E-mail</th>
						<th class="py-3 px-4 text-left">City</th>
						<th class="py-3 px-1 text-left"></th>
					</tr>
				</thead>
        <tbody>
						<?php foreach ($users as $user) { ?>
						<tr class="border-b hover:bg-gray-100">
								<td class="py-3 px-4"><?= htmlspecialchars($user->getName()) ?></td>
								<td class="py-3 px-4"><?= htmlspecialchars($user->getEmail()) ?></td>
								<td class="py-3 px-4"><?= htmlspecialchars($user->getCity()) ?></td>
						</tr>
						<?php } ?>

					<tr class="bg-gray-50">
						<form method="post" action="create.php">
							<td class="py-2 px-4">
								<input name="name" type="text" placeholder="Enter name" class="w-full p-2 border rounded-md focus:ring focus:ring-blue-300"/>
							</td>
							<td class="py-2 px-4">
								<input name="email" type="email" placeholder="Enter email" class="w-full p-2 border rounded-md focus:ring focus:ring-blue-300"/>
							</td>
							<td class="py-2 px-4">
								<input name="city" type="text" placeholder="Enter city" class="w-full p-2 border rounded-md focus:ring focus:ring-blue-300"/>
							</td>
							<td class="py-2 px-1">
								<button type="submit" class="bg-blue-600 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-700 transition">
									Create
								</button>
							</td>
						</form>
					</tr>
        </tbody>
      </table>
    </div>
</body>
