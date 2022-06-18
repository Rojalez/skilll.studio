<select {{ $attributes->merge(['class' => 'input bg-grey rounded text-sm text-grey-600 border-0 focus:ring-0 focus:outline-none focus:border-0'])  }}>
    {{$slot}}
</select>
