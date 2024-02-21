import React, { useState, useEffect, useRef } from 'react';
import {View, StyleSheet} from 'react-native';

// npm install react-native-maps
import MapView, { Marker } from 'react-native-maps';
// npx expo install expo-locationgit status
import * as Location from 'expo-location';
import {
  requestForegroundPermissionsAsync,
  getCurrentPositionAsync,
  watchPositionAsync,
  LocationAccuracy
} from 'expo-location';

export default function App() {

  const [location, setLocation] = useState(null);
  const mapRef = useRef(null); // Remove o tipo do componente MapView

  async function requestLocationPermissions() {
    const { granted } = await requestForegroundPermissionsAsync();
    if (granted) {
      const currentPosition = await getCurrentPositionAsync();
      setLocation(currentPosition);
    }
  }

  useEffect(() => {
    requestLocationPermissions();
  }, []);

  useEffect(() => {
    if (location !== null && location.coords) {
      watchPositionAsync({
        accuracy: LocationAccuracy.Highest,
        timeInterval: 1000,
        distanceInterval: 1
      }, (response) => {
        setLocation(response);
        mapRef.current?.animateCamera({
          pitch:70,
          center:response.coords
        })
      });
    }
  }, [location]);

  return (
    <View style={styles.container}>
      {location && location.coords && (
        <MapView
          ref={mapRef}
          style={styles.map}
          initialRegion={{
            latitude: location.coords.latitude,
            longitude: location.coords.longitude,
            latitudeDelta: 0.005,
            longitudeDelta: 0.005,
          }}
        >
          <Marker
            coordinate={{
              latitude: location.coords.latitude,
              longitude: location.coords.longitude
            }}
          />
        </MapView>
      )}
      <View style={styles.search}>
      </View>
    </View>
  );
}

const styles = StyleSheet.create ({
    container: {
        flex: 1,
        backgroundColor: '#fff',
        alignItems: 'center',
        justifyContent: 'center',
      },
  
    map:{
        height: '70%',
        width: '100%',
        backgroundColor: '#000',
    },
  
    search:{
        height: '30%',
        width: '100%',
        backgroundColor: '#666',
    }

})