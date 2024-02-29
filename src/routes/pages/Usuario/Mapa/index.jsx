import React, { useState, useEffect, useRef } from 'react';
import {View, StyleSheet, Pressable, Text, Modal, TextInput} from 'react-native';
import { useNavigation } from '@react-navigation/native';
// npm install react-native-maps
import MapView, { Marker } from 'react-native-maps';
// npx expo install expo-location
import * as Location from 'expo-location'; 


import {
  requestForegroundPermissionsAsync,
  getCurrentPositionAsync,
  watchPositionAsync,
  LocationAccuracy
} from 'expo-location';

export default function Mapa() {
  const [number, onChangeNumber] = React.useState('');

  const [visu, setVisu] = useState(false);

  const navigation = useNavigation();

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

  function openModalFilter() {
    setVisu(true)
  }
  function closeModalFilter() {
    setVisu(false)
  }


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
        <Pressable style={styles.buttonFiltter} onPress={()=>openModalFilter()}>
          <Text style={styles.buttonText}>Filtrar Locais</Text>
        </Pressable>
      </View>

      <Modal style={styles.modalContainer} visible={visu} animationType='slide'>
        <View style={styles.modalContent}>
            <View style={styles.title}>
              <Text style={styles.modalTitle}>Faixa Etária</Text>
            </View>
            <View style={styles.inputsAge}>
              <TextInput
                style={styles.input}
                onChangeText={onChangeNumber}
                value={number}
                placeholder="Idade"
                keyboardType="numeric"
              />
              <Text style={styles.parametros}>Min.</Text>
              <TextInput
                style={styles.input}
                onChangeText={onChangeNumber}
                value={number}
                placeholder="Idade"
                keyboardType="numeric"
              />
              <Text style={styles.parametros}>Máx.</Text>
            </View>
            <View style={styles.title}>
              <Text style={styles.modalTitle}>Distâ</Text>
            </View>
        </View>
      </Modal>
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
      backgroundColor: '#fff',
      alignItems:'center',
      borderTopRightRadius:20,
      borderTopLeftRadius:20,
    },

    buttonFiltter: {
      alignItems:'center',
      backgroundColor:'#fabdc2',
      padding:15,
      borderRadius:20,
      width:'80%',
      marginBottom:20
    },

    buttonText: {
      fontSize:20,
      color:'#6d9eaf'
    },

    modalContainer:{
      backgroundColor:'#ccc',
      flex:2,

    },

    modalContent: {
      width:'100%'
    },

    modalTitle:{
      fontSize:15,
      padding:15,
      color:'#a6a6a6',
    },
    inputsAge: {
      alignItems:'center',

      flexDirection:'row'
    },

    input: {
      height: 35,
      margin: 12,
      borderWidth: 1,
      padding: 10,
      width:'20%',
    },

});