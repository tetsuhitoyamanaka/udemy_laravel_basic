<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            お問い合わせ一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    index<br>
                    <a href="{{ route('contacts.create') }}" class="text-blue-500">新規登録</a><br>
                    <form class="mb-8" method="get" action="{{ route('contacts.index')}}">
                        <input type="text" name="search" placeholder="検索">
                        <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" _msthash="1322126" _msttexthash="79859" _msthidden="1">検索</button>
                    </form>

                    <div class="lg:w-2/3 w-full mx-auto overflow-auto" _msthidden="20">
                    <table class="table-auto w-full text-left whitespace-no-wrap" _msthidden="20">
                        <thead _msthidden="4">
                        <tr _msthidden="4">
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl" _msthash="1608139" _msttexthash="44161" _msthidden="1">Id</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100" _msthash="1608140" _msttexthash="58448" _msthidden="1">氏名</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100" _msthash="1608141" _msttexthash="94432" _msthidden="1">件名</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100" _msthash="1608142" _msttexthash="58734" _msthidden="1">登録日</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100" _msthash="1608142" _msttexthash="58734" _msthidden="1">詳細</th>
                        </tr>
                        </thead>
                        <tbody _msthidden="16">
                        @foreach($contacts as $contact)
                        <tr _msthidden="4">
                            <td class="border-t-2 border-gray-200 px-4 py-3" _msthash="1615306" _msttexthash="32123" _msthidden="1">{{ $contact->id }}</td>
                            <td class="border-t-2 border-gray-200 px-4 py-3" _msthash="1615307" _msttexthash="56472" _msthidden="1">{{ $contact->name }}</td>
                            <td class="border-t-2 border-gray-200 px-4 py-3" _msthash="1615308" _msttexthash="26949" _msthidden="1">{{ $contact->title }}</td>
                            <td class="border-t-2 border-gray-200 px-4 py-3" _msthash="1615309" _msttexthash="14560" _msthidden="1">{{ $contact->created_at }}</td>
                            <td class="border-t-2 border-gray-200 px-4 py-3" _msthash="1615309" _msttexthash="14560" _msthidden="1"><a class="text-blue-500" href="{{ route('contacts.show', ['id' => $contact->id ]) }}">詳細を見る</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>                                                                                        
                    </div>
                </div>
            </div>
        </div>
        {{ $contacts->links() }}
    </div>
</x-app-layout>
