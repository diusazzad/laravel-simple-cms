<table class="w-full mb-4 bg-white rounded shadow-md text-md">
    <tbody>
        <tr class="border-b">
            <th class="p-3 px-5 text-left">Name</th>
            <th class="p-3 px-5 text-left">Email</th>
            <th class="p-3 px-5 text-left">Role</th>
            <th>Action</th>
        </tr>
        <tr class="bg-gray-100 border-b hover:bg-orange-100">
            <td class="p-3 px-5"><input type="text" value="user.name" class="bg-transparent"></td>
            <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
            <td class="p-3 px-5">
                <select value="user.role" class="bg-transparent">
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                </select>
            </td>
            <td class="flex justify-end p-3 px-5"><button type="button"
                    class="px-2 py-1 mr-3 text-sm text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">Save</button><button
                    type="button"
                    class="px-2 py-1 text-sm text-white bg-red-500 rounded hover:bg-red-700 focus:outline-none focus:shadow-outline">Delete</button>
            </td>
        </tr>


    </tbody>
</table>
