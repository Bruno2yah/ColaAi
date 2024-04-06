import React, { useState, useEffect } from 'react';
import { View, Image, StyleSheet, Pressable } from 'react-native';
import { useNavigation, useRoute, useFocusEffect  } from '@react-navigation/native';

export default function NavBar() {
    const navigation = useNavigation();
    const route = useRoute();
    const selectedBtn = route.params?.selected || 0;

    const [homeColor, setHomeColor] = useState('#FFD932');
    const [progColor, setProgColor] = useState('#A6A6A6');
    const [mapColor, setMapColor] = useState('#A6A6A6');
    const [notifColor, setNotifColor] = useState('#A6A6A6');
    const [perfilColor, setPerfilColor] = useState('#A6A6A6');

    useEffect(() => {
        setColor(selectedBtn);
    }, [selectedBtn]);

    useFocusEffect(() => {
        setColor(selectedBtn);
    });

    function setColor(value) {
        if(value == 0)
        {
            setHomeColor('#FFD932');
            setProgColor('#A6A6A6');
            setMapColor('#A6A6A6');
            setNotifColor('#A6A6A6');
            setPerfilColor('#A6A6A6');
        }
        else if(value == 1)
        {
            setProgColor('#FFD932');
            setHomeColor('#A6A6A6');
            setMapColor('#A6A6A6');
            setNotifColor('#A6A6A6');
            setPerfilColor('#A6A6A6');
        }
        else if(value == 2)
        {
            setMapColor('#FFD932');
            setProgColor('#A6A6A6');
            setHomeColor('#A6A6A6');
            setNotifColor('#A6A6A6');
            setPerfilColor('#A6A6A6');
        }
        else if(value == 3)
        {
            setNotifColor('#FFD932');
            setProgColor('#A6A6A6');
            setHomeColor('#A6A6A6');
            setMapColor('#A6A6A6');
            setPerfilColor('#A6A6A6');
        }
        else if(value == 4)
        {
            setPerfilColor('#FFD932');
            setProgColor('#A6A6A6');
            setHomeColor('#A6A6A6');
            setMapColor('#A6A6A6');
            setNotifColor('#A6A6A6');
        }
    }

    return (
        <View style={styles.container}>
            <View style={styles.buttonsArea}>
                <View style={styles.buttons}>
                    <Pressable style={styles.buttonNav} onPress={() => { setColor(0); navigation.navigate('HomeUsuario', { selected: 0 }) }}>
                        <Image
                            style={{ width: 61, height: 61, tintColor: homeColor }}
                            source={require('../../../assets/img/NavBar/home.png')}
                        />
                    </Pressable>
                    <Pressable style={styles.buttonNav} onPress={() => { setColor(1); navigation.navigate('ProgramacaoCultural', { selected: 1 }) }}>
                        <Image
                            style={{ width: 59, height: 59, tintColor: progColor }}
                            source={require('../../../assets/img/NavBar/ingressos.png')}
                        />
                    </Pressable>
                    <Pressable style={styles.buttonNav} onPress={() => { setColor(2) }}>
                        <Image
                            style={{ width: 61, height: 61, tintColor: mapColor }}
                            source={require('../../../assets/img/NavBar/local.png')}
                        />
                    </Pressable>
                    <Pressable style={styles.buttonNav} onPress={() => { setColor(3) }}>
                        <Image
                            style={{ width: 61, height: 61, tintColor: notifColor }}
                            source={require('../../../assets/img/NavBar/notif.png')}
                        />
                    </Pressable>
                    <Pressable style={styles.buttonNav} onPress={() => { setColor(4); navigation.navigate('Perfil', { selected: 4 }) }}>
                        <Image
                            style={{ width: 61, height: 61, tintColor: perfilColor }}
                            source={require('../../../assets/img/NavBar/perfil.png')}
                        />
                    </Pressable>
                </View>
            </View>
        </View>
    );
}

const styles = StyleSheet.create({
    container: {
        backgroundColor: '#fff',
        overflow: "hidden",
        width: '100%',
        position: 'relative',
        bottom: 0,
        justifyContent: 'center',
        alignItems: 'center',
        alignSelf: 'flex-end',
    },
    buttonsArea: {
        flexDirection: 'row',
        width: '90%',
        alignSelf: 'center',
        position: 'relative',
        justifyContent: 'center',
        alignItems: 'center',
    },
    buttons: {
        flex: 1,
        flexDirection: 'row',
        justifyContent: 'space-between',
        alignItems: 'center',
        alignSelf: 'center',
    },
    buttonNav: {
        justifyContent: 'center',
        alignItems: 'center',
    },
})