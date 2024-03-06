import React, { useState, useEffect, useRef } from 'react';
import {View, StyleSheet, Pressable, Text, Modal, SafeAreaView, TextInput, FlatList, Image, ImageBackground} from 'react-native';
import { useNavigation } from '@react-navigation/native';
// npm install react-native-maps
import MapView, { Marker } from 'react-native-maps';
// npx expo install expo-location
import * as Location from 'expo-location';
import NavBar from '../../../../Components/NavBar/navbar';
// npm install @react-native-community/slider --save
import Slider from '@react-native-community/slider'
import { MaterialCommunityIcons } from '@expo/vector-icons';
import { EvilIcons } from '@expo/vector-icons';




import {
  requestForegroundPermissionsAsync,
  getCurrentPositionAsync,
  watchPositionAsync,
  LocationAccuracy
} from 'expo-location';

export default function Mapa() {
  const [number1, onChangeNumber1] = React.useState('');
  const [number2, onChangeNumber2] = React.useState('');

  const [visu, setVisu] = useState(false);

  const navigation = useNavigation();

  const [location, setLocation] = useState(null);
  const mapRef = useRef(null); // Remove o tipo do componente MapView

  const [distance, setDistance] = useState (6);

  const [checkboxP, setCheckboxP] = useState([]);
  const [statuscheckboxP, setStatusCheckboxP] = useState([]);
  const [checkboxV, setCheckboxV] = useState([]);
  const [statuscheckboxV, setStatusCheckboxV] = useState([]);

  const EVENTOS = [
    {
      idEventos: 'cace16ee-4667-4ad1-b793-710c9409df87',
      titleEvents: 'Orquestra',
      Image: require('../../../../../assets/img/Mapa/orquestra.png'),
    },
    {
      idEventos: '11433589-06bf-47c8-be10-e93a7d7fa50a',
      titleEvents: 'Pintura',
      Image: require('../../../../../assets/img/Mapa/Pintura.png'),
    },
    {
      idEventos: 'f12ee47c-dec8-43b1-9434-65fc31b385bf',
      titleEvents: 'Fotografia',
      Image: require('../../../../../assets/img/Mapa/Fotografia.png'),
    },
    {
      idEventos: '89ec83aa-0c03-432f-bb8f-0132ec889278',
      titleEvents: 'Biblioteca',
      Image: require('../../../../../assets/img/Mapa/Bibliotecas.png'),
    },
  ];
  

  const PERIODOS = [
    {
      idPeriodos: 'bd7acbea-c1b1-46c2-aed5-3ad53abb28ba',
      titleP: 'Todos',
    },
    {
      idPeriodos: '3ac68afc-c605-48d3-a4f8-fbd91aa97f63',
      titleP: 'Vespertino',
    },
    {
      idPeriodos: '58694a0f-3da1-471f-bd96-145571e29d72',
      titleP: 'Matutino',
    },
    {
      idPeriodos: 'e1a37e11-d541-4468-a1a5-b89ae7b7308d',
      titleP: 'Noturno',
    },

  ];

  const VALORES = [
    {
      idValores: '4d2c9a30-dbe0-11ee-bda9-2fa88ca22d46',
      titleV: 'Pagos',
    },
    {
      idValores: '53a2cec0-dbe0-11ee-bda9-2fa88ca22d46',
      titleV: 'Gratuitos',
    },
    

  ];

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
    console.log(visu)
  }
  function closeModalFilter() {
    setVisu(false)
    console.log(visu)
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
        <View style={styles.options}>
          <FlatList
            data={EVENTOS}
            numColumns={4}
            renderItem={({ item, index }) => (
              <View style={{ flexDirection: 'column', alignItems: 'center', margin: 10 }}>
                <ImageBackground source={item.Image} style={{ width: 50, height: 50 }}>
                  {/* Conteúdo adicional, se necessário */}
                </ImageBackground>
                <Text style={styles.titleImg}>{item.titleEvents}</Text>
              </View>
            )}
            keyExtractor={item => item.idEventos}
          />
        </View>

      </View>

      <Modal style={styles.modalContainer} visible={visu} animationType='slide'>
        <View style={styles.modalContent}>
            <View style={styles.title}>
              <Text style={styles.modalTitle}>Faixa Etária</Text>
              <Pressable style={styles.closeButton} onPress={()=> closeModalFilter()}>
                <EvilIcons name="close" size={40} color="black" />
              </Pressable>
            </View>
            <View style={styles.inputsAge}>
              <TextInput
                style={styles.input}
                onChangeText={onChangeNumber1}
                value={number1}
                placeholder="1 ano"
                keyboardType="numeric"
                />
              <Text style={styles.parametro1}>Min.</Text>
              <TextInput
                style={styles.input}
                onChangeText={onChangeNumber2}
                value={number2}
                placeholder="11 anos"
                keyboardType="numeric"
                />
              <Text style={styles.parametro2}>Máx.</Text>
            </View>
            <View style={styles.title}>
              <Text style={styles.modalTitle}>Distância</Text>
            <View style={styles.areaSlider}>
              <Text style={styles.modalTitle}> {distance} Km</Text>
              <Slider
                style={styles.sliderDistancia}
                minimumValue={1}
                maximumValue={30}
                maximumTrackTintColor='#000'
                minimumTrackTintColor='#ffd417'
                thumbTintColor='#ef6f77'
                value={distance}
                onValueChange={ (value) => setDistance(value.toFixed(0))}
                />
            </View>
            </View>
            <View style={styles.kmsRef}>
              <Text style={styles.parametro1}>1 Km</Text>
              <Text style={styles.parametro2}>30 Km</Text>
            </View>

            <View style={styles.title}>
              <Text style={styles.modalTitle}>Turno</Text>
            </View>
            <View style={styles.checkBoxes}>
              <FlatList
                data={PERIODOS}
                numColumns={2}
                renderItem={({ item, index }) => (
                  <View style={{ flex: 1, flexDirection: 'column', justifyContent: 'space-evenly', margin: 10 }}>
                    <Pressable style={{ flexDirection: 'row' }} onPress={() => {
                      if (checkboxP[index] !== undefined) {
                        checkboxP[index] = undefined;
                      } else {
                        checkboxP[index] = item.idPeriodos;
                      }
                      setStatusCheckboxP(Math.random());
                      console.log(checkboxP);
                    }}>
                      {(checkboxP[index] === undefined) ? <MaterialCommunityIcons name="checkbox-blank-outline" size={24} color="#a6a6a6" /> : <MaterialCommunityIcons name="checkbox-marked" size={24} color="#6daacb" />}
                      <Text style={styles.parametro0}> {item.titleP}</Text>
                    </Pressable>
                  </View>
                )}
                keyExtractor={item => item.idPeriodos}
                />
            </View>


            <View style={styles.title}>
              <Text style={styles.modalTitle}>Valor</Text>
            </View>
            <View style={styles.checkBoxes}>
              <FlatList
                data={VALORES}
                numColumns={2}
                renderItem={({ item, index }) => (
                  <View style={{ flex: 1, flexDirection: 'column', justifyContent: 'space-evenly', margin: 10, marginBottom:20 }}>
                    <Pressable style={{ flexDirection: 'row' }} onPress={() => {
                      if (checkboxV[index] !== undefined) {
                        checkboxV[index] = undefined;
                      } else {
                        checkboxV[index] = item.idValores;
                      }
                      setStatusCheckboxV(Math.random());
                      console.log(checkboxV);
                    }}>
                      {(checkboxV[index] === undefined) ? <MaterialCommunityIcons name="checkbox-blank-outline" size={24} color="#a6a6a6" /> : <MaterialCommunityIcons name="checkbox-marked" size={24} color="#6daacb" />}
                      <Text style={styles.parametro0}> {item.titleV}</Text>
                    </Pressable>
                  </View>
                )}
                keyExtractor={item => item.idValores}
                />
            </View>

            <View style={styles.search}>     
              <Pressable style={styles.buttonFiltter}>
                <Text style={styles.buttonText}>Aplicar Filtros</Text>
              </Pressable>
            </View>
        </View>
      </Modal>
      <NavBar/>
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
        height: '65%',
        width: '100%',
        backgroundColor: '#000',
    },
  
    search:{
      height: '25%',
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
      color:'#6d9eaf',
    },

    titleImg:{
      color:'#a6a6a6',
      fontWeight:'600',
    },

    modalContainer:{
      backgroundColor:'#00000080',
      flex:1,

    },

    modalContent: {
      width:'100%',
      height:'80%'
    },

    closeButton: {
      position: 'absolute',
      top: 10,
      right: 10,
    },
    

    modalTitle:{
      fontSize:20,
      padding:15,
      color:'#a6a6a6',
      fontWeight:'600',
    },

    parametro0: {
      fontSize:15,
      color:'#a6a6a6',
    },

    parametro1: {
      fontSize:15,
      padding:15,
      color:'#6daacb',
    },
    parametro2: {
      fontSize:15,
      padding:15,
      color:'#e6aec3',
    },


    inputsAge: {
      alignItems:'center',
      flexDirection:'row',
    },

    input: {
      height: 35,
      margin: 12,
      borderWidth: 1,
      padding: 10,
      width:'20%',
      borderRadius:8,
      borderColor:'#a6a6a6',
      textAlign:'center'
    },

    areaSlider: {
      width:'100%',
      backgroundColor:"#FFF",
      borderRadius:8,
      padding:8,
      justifyContent:'center',
      alignItems:'center',
    },

    sliderDistancia: {
      height:10,
      width:'100%',
      
    },
    kmsRef: {
      flexDirection:'row',
      justifyContent:'space-between'
    }

});