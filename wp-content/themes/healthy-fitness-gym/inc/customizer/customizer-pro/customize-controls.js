( function( api ) {

	// Extends our custom "healthy-fitness-gym" section.
	api.sectionConstructor['healthy-fitness-gym'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );